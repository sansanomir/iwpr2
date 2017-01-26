<?php
    $this->load->view('inc/bootstrap.php');
?>
<main>
	<div class="page-header" style='margin-bottom: 100px'>
	    <div class="container col-md-4">
	          <a href="http://localhost:8080/pccomponentes/index.php/home"><img style='height: 100px; width: 100px;' src="<?php echo base_url(); ?>assets/images/logo.svg"></a>
	    </div>
	      
	    <div class="container col-md-8">
	    	<h2><Enhorabuena</h2>
	    </div>
	  </div>
		
		<h4>Te enviaremos la compra a casa.</h4>
    <a href= <?php echo $volver?>> Atrás </a>
</main>

<?php
    $this->load->view('inc/pie.php');
?>