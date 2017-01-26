<?php
    $this->load->view('inc/bootstrap.php');
?>
<main>

	<div class="page-header">
		<h2><?php echo "Subcategoria: " .$subcategoria->nombre ?></h2>
	</div>

 	<div class="container col-md-2">
      <ul class="list-group">
        <li class="list-group-item active">
            Categorías
        </li>
        <?php foreach ($categorias as $categoria): ?>
          <li class="list-group-item ">
              <a href=<?php echo $direccionlistaprod.$categoria->oid; ?>><?php echo $categoria->nombre ?></a>
              
          </li>
        <?php endforeach; ?>
      </ul>
  </div>

	<div class="container col-md-10">
	  <ul class="list-group">
	  <form action="home/addCarro">
		<?php foreach ($productos as $prod): ?>

		    <div class="container col-md-6">
	         	<a href=<?php echo $direccion.$prod->oid; ?>>
	            	<img style='height: 300px; width: 300px;' src="<?php echo base_url(); ?>assets/images/<?php echo $prod->oid?>.png">
	          	</a>
			    <li class="list-group-item">
	              
	  		        <?php echo "<h4>".$prod->nombre ."</h4>"?>
	              <?php echo "<p>Precio: ".$prod->precio."€</p>" ?>
	              <?php echo "<p>Disponibles: ".$prod->stock."</p>" ?>
	              <a href=<?php echo $direccionAdd.$prod->oid; ?>> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Añadir al carrito </a>
	  		    </li>
			</div>

		<?php endforeach; ?>
	  </ul>
	  </form>
  </div>

</main>