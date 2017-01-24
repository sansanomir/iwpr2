<main>
  <h2>Productos</h2>
  <?php echo "Hola ".$username;?>

  <br>
  <?php echo anchor('login/index','Logueate','title="Login"'); ?>
  <?php echo anchor('home/logout','Logout','title="Logout"'); ?>
  <?php echo anchor('home/registro','Registro','title="Registro"'); ?>
  <?php echo anchor('home/misdatos','Mis datos','title="Mis datos"'); ?>
  <br>
  <ul>
  <?php foreach ($producto as $prod) {
  		echo "<li>Producto " .$prod->oid  ." Nombre "  .$prod->nombre ." Descripción " .$prod->descripcion ." Stock " .$prod->stock ."</li><br>";

  	} ?>
  </ul>
</main>
