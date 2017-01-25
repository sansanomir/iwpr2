<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Producto','',TRUE);
		$this->load->model('Marca','',TRUE);
	}

	public function index(){
		$data['producto'] = $this->Producto->listaProductos();
		$data['direccion'] = "http://localhost:8080/pccomponentes/index.php/home/producto/";
		$data['direccionAdd'] = "http://localhost:8080/pccomponentes/index.php/home/addCarro/";
		if($this->session->userdata('logged_in')){
		 $session_data = $this->session->userdata('logged_in');
		 $data['username'] = $session_data['username'];
		 if($session_data['username'] == "admin")
			$this->load->view('home/index');
			else{
				$data['carro'] = $this->Producto->getProductosCarrito($session_data['username'],$session_data['carrooid']);
		 		$this->load->view('publica/principal', $data);
			}
		}
		else{
			 $data['username'] = "invitado";
			 $data['carro'] = $this->Producto->getProductosCarrito("invitado",2);
			 $this->load->view('publica/principal', $data);
		}
	}
	public function addCarro($oid){
		echo $oid;

	}
	public function producto($oid){
		$producto = $this->Producto->getProductoByOid($oid);
		$data['producto'] = $producto[0];
		$marcasoid = $data['producto']->marcasoid;
		$marca = $this->Marca->getMarcaByOid($marcasoid);
		$data['marca'] = $marca[0];
		$data['direccion'] = "http://localhost:8080/pccomponentes/index.php/home/addCarro/".$oid;
		$this->load->view('publica/producto', $data);

	}
	public function logout(){
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('home');
	}
	public function misdatos(){
		if($this->session->userdata('logged_in')){
		 $session_data = $this->session->userdata('logged_in');
		 $data['username'] = $session_data['username'];
		 if($session_data['username'] != "admin"){
			 $this->load->view('privada/mis_datos', $data);
		 }
		}
		else{
			$data['producto'] = $this->Producto->listaProductos();
			$data['username'] = "invitado";
			$data['carro'] = $this->Producto->getProductosCarrito("invitado",2);
			//$this->load->view('publica/principal', $data);
			redirect('home');
		}
	}
	public function registro(){
		$this->load->view('publica/registro_view');
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
