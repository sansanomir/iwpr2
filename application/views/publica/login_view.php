<main class="container">
  <h2>Login:</h2>
  <!--<form action="respuesta/script.php" method="POST" name="f1" id="f1"-->
  <!--class="form" role="form">-->
  <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
  	<div class=form-group><label for="user" class="form-label"> User: </label>
  		<span class="obligatorio">(*)</span>
  		<input type="text" name="user" "required size=25"
  			maxlength="200" placeholder="User" id="username"
  			class="form-control"/ required>
  	</div>
    <div class=form-group><label for="contrasena1" class="form-label"> Contraseña: </label>
  		<span class="obligatorio">(*)</span>
  		<input type="password" name="contrasena1" "required size=25"
  			maxlength="200" placeholder="****" id="password"
  			class="form-control"/ required>
  	</div>
  	<input type="submit" class="btn btn-primary" value="Login" id="btnEnviar">
  </form>
</main>
