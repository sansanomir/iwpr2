<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
    $this->load->view('inc/cap.php');
?>

    <main>
        <h1><?php echo "$titulo";?></h1>
        <?php
            $this->load->view('inc/menu.php');
        ?>
        <?php
            $this->load->view('publica/principal.php');
         ?>

    </main>
<?php
    $this->load->view('inc/pie.php');
?>
