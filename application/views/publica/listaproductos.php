<?php
    $this->load->view('inc/bootstrap.php');
?>
<main>

	<div class="page-header" style='margin-bottom: 100px'>
		<div class="container col-md-4">
         	<a href="http://localhost:8080/pccomponentes/index.php/home"><img style='height: 100px; width: 100px;' src="<?php echo base_url(); ?>assets/images/logo.svg"></a>
      	</div>
      	<div class="container col-md-8">
			<h2><?php echo "Categoria: ".$categoria->nombre ?></h2>
		</div>
	</div>
	<div>
 	<div class="container col-md-2">
  		<ul class="list-group">
    		<li class="list-group-item active">
        		Subcategorías
    		</li>
    		<?php foreach ($subcategorias as $subcategoria): ?>
      		<li class="list-group-item ">
          		<a href=<?php echo $direccionlistaprodsub.$subcategoria->oid; ?>><?php echo $subcategoria->nombre ?></a>
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
  </div>

</main>

<?php
    $this->load->view('inc/pie.php');
?>