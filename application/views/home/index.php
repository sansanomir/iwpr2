<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
    $this->load->view('inc/cap.php');
?>

    <main>
        <?php echo $titulo;?>
        <?php
            $this->load->view('inc/menu.php');
        ?>

    </main>
<?php
    $this->load->view('inc/pie.php');
?>
