<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php

$this->load->view('inc/capm.php');
?>

    <main>
        <div>
            <h1><?php echo "Categorias";?></h1>
            <?php echo $output;?>
        </div>

    </main>
<?php
    $this->load->view('inc/pie.php');
?>
