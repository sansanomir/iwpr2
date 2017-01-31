<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('Usuario','',TRUE);
   $this->load->model('Producto','',TRUE);
   $this->load->helper(array('form'));
 }

 function index(){
   $formSubmit = $this->input->post('boton');
   if($formSubmit == 'Login'){
     $nombre = $this->input->post('username');
     $contra = $this->input->post('password');
     if($nombre=="" || $contra==""){
         $data['error'] = 'Usuario y/o contraseña vacía';
       $this->load->view('publica/login_view.php', $data);
     }
     else {
       $result = $this->Usuario->login($nombre, $contra);
       if($result){
         $sess_array = array();
         foreach($result as $row)
         {
           $sess_array = array(
             'oid' => $row->oid,
             'username' => $row->userName,
             'password' => $row->password,
             'nombre' => $row->nombre,
             'email' => $row->email,
             'oid' => $row->direccion,
             'cuenta' => $row->cuenta,
             'carrooid' => $row->carrooid,
           );
           $this->session->set_userdata('logged_in', $sess_array);
         }
         $session_data = $this->session->userdata('logged_in');
         if($session_data['username']== "admin"){
           $this->load->view('home/index');
         }
         else{
               $data['success'] = 'Usuario registrado correctamente.';
           $data['producto'] = $this->Producto->listaProductos();
           $data['username'] = $session_data['username'];
           $data['carro'] = $this->Producto->getProductosCarrito($session_data['username'],$session_data['carrooid']);
           redirect('home','refresh',$data);
           //$this->load->view('publica/principal.php',$data);
           return true;
         }
       }
       else{
           $data['error'] = 'Usuario y/o contraseña incorrecto';
         $this->load->view('publica/login_view.php', $data);
       }
     }
   }
   else{
     $this->load->view('publica/registro_view.php');
   }
 }
}
?>
