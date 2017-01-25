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
       $this->load->view('publica/login_view.php');
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
           $data['producto'] = $this->Producto->listaProductos();
           $data['username'] = $session_data['username'];
           $this->load->view('publica/principal.php',$data);
           return true;
         }
         /*$sess_array = array();
         foreach($result as $row)
         {
           $sess_array = array(
             'id' => $row->id,
             'username' => $row->username
           );
           $this->session->set_userdata('logged_in', $sess_array);
         }
         return TRUE;
         */
       }
       else{
         $this->load->view('publica/login_view.php');
       }
     }
   }
   else{
     $this->load->view('publica/registro_view.php');
   }
 }
 /*function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('publica/login_view.php');
   }
   else
   {
     //Go to private area
     redirect('home', 'refresh');
   }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
   echo("dfasdfas");
   //query the database
   $result = $this->Usuario->login($username, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'username' => $row->username
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
 */
}
?>
