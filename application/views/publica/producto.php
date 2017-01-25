<main>

		<h2><?php echo $producto->nombre ?></h2>
		<p><?php echo "<b>Marca: </b>" .$marca->nombre ?></p>
		<p><?php echo "<b>Descripción: </b>" .$producto->descripcion ?></p>
		<p><?php echo "<b>Precio: </b>" .$producto->precio ."€" ?></p>
		<a href= <?php echo $direccion?>> Añadir al carrito </a>
</main>
