<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
    $this->load->view('inc/cap.php');
?>

    <main>
        <h2>Bienvenido a code igniter</h2>
        <?php
            $this->load->view('inc/menu.php');
        ?>

    </main>
<?php
    $this->load->view('inc/pie.php');
?>