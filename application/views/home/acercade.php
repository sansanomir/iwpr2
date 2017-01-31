<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
    $this->load->view('inc/bootstrap.php');
?>

    <main>
    	<div class="page-header" style='margin-bottom: 100px'>
		    <div class="container col-md-4">
		          <a href="http://localhost:8080/pccomponentes/index.php/home"><img style='height: 100px; width: 100px;' src="<?php echo base_url(); ?>assets/images/logo.svg"></a>
		    </div>
		      
		    <div class="container col-md-8"> 
		    	<h1><?php echo "Acerca de";?></h1>
		    </div>
		</div>
     <div class="container">
        <ul class="list-group">
            <li class="list-group-item">Youchen Zhou</li>
            <li class="list-group-item">Héctor Sansano</li>
        </ul>
        </div>
    </main>
<?php
    $this->load->view('inc/pie.php');
?>
