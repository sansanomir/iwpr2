<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}
	public function index(){
		if($this->session->userdata('logged_in'))
		{
			 $session_data = $this->session->userdata('logged_in');
			 $data['username'] = $session_data['username'];
			 $this->load->view('home_view', $data);
		}
		else
		{
			 //If no session, redirect to login page

			 //Si no está logueado....
			 //redirect('login', 'refresh');
		}
		$data["titulo"] = "PCComponentes";
		$this->load->view('home/index', $data);
	}
	public function logout()
	 {
	   $this->session->unset_userdata('logged_in');
	   session_destroy();
	   redirect('home', 'refresh');
	 }
	public function usuarios(){
		$data["titulo"] = "Usuarios";
		$this->load->view('gestion/usuarios', $data);
	}
	public function gestion(){
		$data["titulo"] = "Bienvenido a mi web...";
		$this->load->view('gestion/index', $data);
	}
	public function opiniones(){
		$data["titulo"] = "Opiniones";
		$this->load->view('gestion/opiniones', $data);
	}
	public function categorias(){
		$data["titulo"] = "Categorias";
		$this->load->view('gestion/categorias', $data);
	}
	public function subcategorias(){
		$data["titulo"] = "SubCategorias";
		$this->load->view('gestion/subcategorias', $data);
	}
    public function acercade(){
		$data["tituloH1"] = "Culpables de este sitio web.";
		$this->load->view('home/acercade', $data);
    }
}
?>
