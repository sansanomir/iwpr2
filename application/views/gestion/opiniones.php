<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php

$this->load->view('inc/capm.php');
?>

    <main>
        
        <div class="page-header" style=''>
		<div class="container col-md-3">
         	<a href="http://localhost:8080/pccomponentes/index.php/home"><img style='height: 100px; width: 100px;' src="<?php echo base_url(); ?>assets/images/logo.svg"></a>
      	</div>
      	<div class="container col-md-7">
            <h1><?php echo "Opiniones";?></h1>
		</div>
	</div>
        <div>
            <?php echo $output;?>
        </div>
        

    </main>
<?php
    $this->load->view('inc/pie.php');
?>
