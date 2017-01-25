<main>
  <h2>Productos</h2>
  <?php echo "Hola ".$username;?>

  <br>
  <?php echo anchor('login/index','Logueate','title="Login"'); ?>
  <?php echo anchor('home/logout','Logout','title="Logout"'); ?>
  <?php echo anchor('home/registro','Registro','title="Registro"'); ?>
  <?php echo anchor('home/misdatos','Mis datos','title="Mis datos"'); ?>
  <?php echo anchor('home/misdatos','Mis datos','title="Mis datos"'); ?>
  <br>

  <div class="container">
	  <ul class="list-group">
	  <form action="home/addCarro">
		<?php foreach ($producto as $prod): ?>

		    <li class="list-group-item">
		        <a href=<?php echo $direccion.$prod->oid; ?>><?php echo $prod->oid."  ".$prod->nombre ."  ".$prod->precio; ?></a>
            <br>
            <a href=<?php echo $direccionAdd.$prod->oid; ?>> Añadir al carrito </a>
		    </li>

		<?php endforeach; ?>
	  </ul>
	  </form>
  </div>
<h4>Carrito</h4>
<ul>
<?php for ($x = 0; $x<count($carro); $x++): ?>

    <li>
        <?php echo $carro[$x]; ?>
    </li>

<?php endfor; ?>
</ul>
</main>
