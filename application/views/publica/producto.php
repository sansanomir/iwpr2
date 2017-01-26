<?php
    $this->load->view('inc/bootstrap.php');
?>
<main>
	<div class="page-header" style='margin-bottom: 100px'>
		<div class="container col-md-4">
         	<a href="http://localhost:8080/pccomponentes/index.php/home"><img style='height: 100px; width: 100px;' src="<?php echo base_url(); ?>assets/images/logo.svg"></a>
      	</div>
      	<div class="container col-md-8">
			<h2><?php echo $producto->nombre ?></h2>
		</div>
	</div>
	<div class="container">
		<div class="container col-md-6">
	    	<img src="<?php echo base_url(); ?>assets/images/<?php echo $producto->oid?>.png">
	    </div>
	    <div class="container col-md-6">
			<p><?php echo "<b>Marca: </b>" .$marca->nombre ?></p>
			<p><?php echo "<b>Descripción: </b>" .$producto->descripcion ?></p>
			<p><?php echo "<b>Precio: </b>" .$producto->precio ."€" ?></p>
			<p><?php echo "<b>Disponibles: </b>" .$producto->stock ?></p>
			<a href= <?php echo $direccion?>><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Añadir al carrito </a>
			<br>
			<br>
		</div>
		<div class="container col-md-12">
			<h3>Opiniones</h3>
			<?php if (isset($success)) {
				echo "<div class='alert alert-success'><p> ".$success."</p></div>";
			}?>
			<?php if (isset($error)) {
				echo "<div class='alert alert-danger'><p> ".$error."</p></div>";
			}?>
			<?php echo form_open('home/addOpinion/'.$producto->oid); ?>

			    <label for="opinion">Opinión</label><br />
			    <textarea rows="4" cols="50" name="opinion"></textarea><br />

			    <input type="submit" name="submit" value="Añadir opinion" />

			</form>
			<ul>
			<li class="list-group-item active">
				<span class="col-md-3">Usuario</span>
				<span class="col-md-8">Opinión</span>
				</br>
			</li>
			<?php foreach ($opiniones as $opi): ?>
			    <li class="list-group-item">
			        <span class="col-md-3"><?php echo $opi->useroid ?></span>
					<span class="col-md-"><?php echo $opi->comentario ?></span>
			    </li>
					
			<?php endforeach; ?>
			</ul>
		</div>
	</div>
</main>

<?php
    $this->load->view('inc/pie.php');
?>