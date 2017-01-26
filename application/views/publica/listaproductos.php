<?php
    $this->load->view('inc/bootstrap.php');
?>
<main>

	<div class="page-header">
		<h2><?php echo "Categoria: ".$categoria->nombre ?></h2>
	</div>

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

		    <li class="list-group-item">

		        <a href=<?php echo $direccion.$prod->oid; ?>><?php echo $prod->oid."  ".$prod->nombre ."  ".$prod->precio."€" ?></a>
            <br>
            <a href=<?php echo $direccionAdd.$prod->oid; ?>> Añadir al carrito </a>
		    </li>

		<?php endforeach; ?>
	  </ul>
	  </form>
  </div>

</main>