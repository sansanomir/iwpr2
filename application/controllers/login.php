<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct()
      {
       parent::__construct();
       $this->load->model('Producto','',TRUE);
      }

      function index(){
        $data['producto'] = $this->Producto->listaProductos();
        if($this->session->userdata('logged_in')){
          $session_data = $this->session->userdata('logged_in');
          $data['username'] = $session_data['username'];
          if($data['username'] == "admin"){
            $this->load->view('home/index');
          }
          else{
            //$this->load->view('publica/principal', $data);
            redirect('home/index','refresh');
          }
        }
        else{
          $this->load->helper(array('form'));
          $this->load->view('publica/login_view.php', $data);
        }
      }
  }
?>
