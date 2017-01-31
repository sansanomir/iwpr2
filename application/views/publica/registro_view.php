<?php
    $this->load->view('inc/bootstrap.php');
?>
<main class="container">
  <div class="page-header" style='margin-bottom: 100px'>
    <div class="container col-md-4">
          <a href="http://localhost:8080/pccomponentes/index.php/home"><img style='height: 100px; width: 100px;' src="<?php echo base_url(); ?>assets/images/logo.svg"></a>
        </div>
        <div class="container col-md-8">
      <h2>Registro</h2>
    </div>
  </div>
  <!--<form action="respuesta/script.php" method="POST" name="f1" id="f1"-->
  <!--class="form" role="form">-->
  <?php echo validation_errors(); ?>
   <?php echo form_open('registro'); ?>
  	<div class=form-group><label for="username" class="form-label"> Usuario: </label>
  		<span class="obligatorio">(*)</span>
  		<input type="text" name="username" "required size=25"
  			maxlength="200" placeholder="User" id="username"
  			class="form-control"/>
  	</div>
    <div class=form-group><label for="password1" class="form-label"> Contraseña: </label>
  		<span class="obligatorio">(*)</span>
  		<input type="password" name="password1" "required size=25"
  			maxlength="200" placeholder="****" id="password1"
  			class="form-control"/>
  	</div>
    <div class=form-group><label for="password2" class="form-label"> Contraseña: </label>
  		<span class="obligatorio">(*)</span>
  		<input type="password" name="password2" "required size=25"
  			maxlength="200" placeholder="****" id="password2"
  			class="form-control"/>
  	</div>
    <div class=form-group><label for="nombre" class="form-label"> Nombre: </label>
  		<span class="obligatorio">(*)</span>
  		<input type="text" name="nombre" "required size=25"
  			maxlength="200" id="nombre"
  			class="form-control"/>
  	</div>
    <div class=form-group><label for="email" class="form-label"> Email: </label>
  		<span class="obligatorio">(*)</span>
  		<input type="text" name="email" "required size=25"
  			maxlength="200" placeholder="name@server.domain" id="email"
  			class="form-control"/>
  	</div>
    <div class=form-group><label for="direccion" class="form-label"> Dirección: </label>
  		<span class="obligatorio">(*)</span>
  		<input type="text" name="direccion" "required size=25"
  			maxlength="200" placeholder="direccion" id="direccion"
  			class="form-control"/>
  	</div>
    <div class=form-group><label for="cuenta" class="form-label"> Cuenta: </label>
  		<span class="obligatorio">(*)</span>
  		<input type="text" name="cuenta" "required size=25"
  			maxlength="200" id="cuenta"
  			class="form-control"/>
  	</div>
     <?php if (isset($error)) {
				echo "<div class='alert alert-danger'><p> ".$error."</p></div>";
			}?>
    <input type="submit" class="btn btn-primary" value="Registro" id="btnRegistro" name="boton">
  </form>
</main>

<?php
    $this->load->view('inc/pie.php');
?>