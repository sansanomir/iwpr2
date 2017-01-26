<?php
    $this->load->view('inc/bootstrap.php');
?>
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
	<?php foreach ($producto as $prod): ?>

	    <li>
	        <a href="/producto/<?php echo $prod->oid; ?>"><?php echo $prod->nombre ."  " .$prod->precio;  ?></a>
	    </li>

	<?php endforeach; ?>
  </ul>

</main>

<?php
    $this->load->view('inc/pie.php');
?>