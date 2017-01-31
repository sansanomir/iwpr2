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

        if($this->input->post('boton') == "modificar"){
          if(strcmp($contra1,$contra2)==0){
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            if($this->Usuario->modificaDatos($session_data['username'],$contra1,$nombre,$email,$direccion,$cuenta))
              $session_data = $this->session->userdata('logged_in');
       		    $data['username'] = $session_data['username'];
              $this->load->view('privada/mis_datos.php',$data);
          }
        }
        else if ($this->input->post('boton') == "Registro"){
          if(strcmp($contra1,$contra2)==0){
            if($this->Usuario->registro($username,$contra1,$nombre,$email,$direccion,$cuenta)){
                $data['success'] = 'Usuario registrado correctamente.';
                $this->load->view('publica/login_view.php', $data);
            }
            else{
              //Ya existe el user
                $data['error'] = 'Campos incorrectos';
              $this->load->view('publica/registro_view.php', $data);
            }

          }
          else{
              $data['error'] = 'Campos incorrectso';
            $this->load->view('publica/registro_view.php', $data);
          }
        }
      }
  }
?>
