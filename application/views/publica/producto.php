<main>

		<h2><?php echo $producto->nombre ?></h2>
		<p><?php echo "<b>Marca: </b>" .$marca->nombre ?></p>
		<p><?php echo "<b>Descripción: </b>" .$producto->descripcion ?></p>
		<p><?php echo "<b>Precio: </b>" .$producto->precio ."€" ?></p>
		<a href= <?php echo $direccion?>> Añadir al carrito </a>
		<br>
		<br>
		<h3>Opiniones</h3>
		<?php print_r($opiniones) ?>
		<?php foreach ($opiniones as $opi): ?>
		    <li class="list-group-item">
		        <?php echo $opi->useroid ?>
						<br>
						<?php echo $opi->userName ?>
						<br>
						<?php echo $opi->comentario ?>
		    </li>
				<br>
		<?php endforeach; ?>
</main>
