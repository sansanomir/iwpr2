<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
    function __construct()
      {
       parent::__construct();
       $this->load->model('Usuario','',TRUE);
       $this->load->helper(array('form'));
      }

      function index(){
        $username = $this->input->post('username');
        $contra1 = $this->input->post('password1');
        $contra2 = $this->input->post('password2');
        $nombre = $this->input->post('nombre');
        $email = $this->input->post('email');
        $direccion = $this->input->post('direccion');
        $cuenta = $this->input->post('cuenta');

        if(strcmp($contra1,$contra2)==0){
          if($this->Usuario->registro($username,$contra1,$nombre,$email,$direccion,$cuenta)){
              $this->load->view('publica/login_view.php');
          }
          else{
            //Ya existe el user
            $this->load->view('publica/registro_view.php');
          }

        }
        else{
          $this->load->view('publica/registro_view.php');
        }
      }
  }
?>
