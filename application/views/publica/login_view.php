<?php
    $this->load->view('inc/bootstrap.php');
?>
<main class="container">
  <h2>Login:</h2>
  <!--<form action="respuesta/script.php" method="POST" name="f1" id="f1"-->
  <!--class="form" role="form">-->
  <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
  	<div class=form-group><label for="username" class="form-label"> Usuario: </label>
  		<span class="obligatorio">(*)</span>
  		<input type="text" name="username" "required size=25"
  			maxlength="200" placeholder="User" id="username"
  			class="form-control"/>
  	</div>
    <div class=form-group><label for="password" class="form-label"> Contraseña: </label>
  		<span class="obligatorio">(*)</span>
  		<input type="password" name="password" "required size=25"
  			maxlength="200" placeholder="****" id="password"
  			class="form-control"/>
  	</div>
  	<input type="submit" class="btn btn-primary" value="Login" id="btnEnviar" name="boton">
    <input type="submit" class="btn btn-primary" value="Registro" id="btnRegistro" name="boton">
  </form>
</main>
