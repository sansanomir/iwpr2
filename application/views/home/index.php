<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
    $this->load->view('inc/cap.php');
?>
<?php
    $this->load->view('inc/bootstrap.php');
?>
    <main>
        <h1><?php echo "Administrador";?></h1>
        <?php
            $this->load->view('inc/menu.php');
        ?>
    </main>
<?php
    $this->load->view('inc/pie.php');
?>
