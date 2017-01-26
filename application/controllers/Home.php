<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Producto','',TRUE);
		$this->load->model('Marca','',TRUE);
		$this->load->model('Usuario','',TRUE);
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
				$data['direccionComprar'] = "http://localhost:8080/pccomponentes/index.php/home/comprar/";
				$data['carro'] = $this->Producto->getProductosCarrito($session_data['username']);
		 		$this->load->view('publica/principal', $data);
			}
		}
		else{
			$data['direccionComprar'] = "http://localhost:8080/pccomponentes/index.php/home/noRegistrado/";
			 $data['username'] = "invitado";
			 $data['carro'] = $this->Producto->getProductosCarrito("invitado");
			 $this->load->view('publica/principal', $data);
		}
	}
	public function addCarro($oid){
	 	$session_data = $this->session->userdata('logged_in');
		if($this->Producto->anyadirAlCarro($oid,1,$session_data['username'])){
			$data['producto'] = $this->Producto->listaProductos();
			$data['direccionComprar'] = "http://localhost:8080/pccomponentes/index.php/home/comprar/";
			$data['direccion'] = "http://localhost:8080/pccomponentes/index.php/home/producto/";
			$data['direccionAdd'] = "http://localhost:8080/pccomponentes/index.php/home/addCarro/";
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['carro'] = $this->Producto->getProductosCarrito($session_data['username']);
			$this->load->view('publica/principal', $data);
		}
	}

	public function addOpinion($oid) {

		if($this->session->userdata('logged_in')){
		 	$session_data = $this->session->userdata('logged_in');
		 	$useroid = $this->Producto->getOidUsuarioByUserName($session_data['username']);
		 	if($this->input->post('opinion') != null && $this->input->post('opinion') !='') {
				if($this->Producto->anyadirOpinion($oid,$this->input->post('opinion'), $useroid)) {
					$data['success'] = 'Opinión añadido correctamente.';
				} else {
					$data['error'] = 'Error no se a podido añadir la opinión';
				}
			} else {
				$data['error'] = 'La opinión no puede estar vacia';
			}
		} else {
			$data['error'] = 'Debe iniciar sesión para añadir una opinión.';
		}
		$producto = $this->Producto->getProductoByOid($oid);
		$data['producto'] = $producto[0];
		$marcasoid = $data['producto']->marcasoid;
		$marca = $this->Marca->getMarcaByOid($marcasoid);
		$data['marca'] = $marca[0];
		$data['direccion'] = "http://localhost:8080/pccomponentes/index.php/home/addCarro/".$oid;
		$data['opiniones'] = $this->Producto->getOpinionesByProductoOid($oid);
		foreach ($data['opiniones'] as $opi) {
			$nombre = $this->Producto->getNombreUsuarioByOid($opi->useroid);
			$opi->useroid = $nombre[0]->userName;
		}
		$this->load->view('publica/producto', $data);
	}

	public function producto($oid){
		$producto = $this->Producto->getProductoByOid($oid);
		$data['producto'] = $producto[0];
		$marcasoid = $data['producto']->marcasoid;
		$marca = $this->Marca->getMarcaByOid($marcasoid);
		$data['marca'] = $marca[0];
		$data['direccion'] = "http://localhost:8080/pccomponentes/index.php/home/addCarro/".$oid;
		$data['opiniones'] = $this->Producto->getOpinionesByProductoOid($oid);
		foreach ($data['opiniones'] as $opi) {
			$nombre = $this->Producto->getNombreUsuarioByOid($opi->useroid);
			$opi->useroid = $nombre[0]->userName;
		}
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
		 $data['misdatos'] = $this->Usuario->getDatosByUsername($data['username']);
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

	public function comprar(){
		$session_data = $this->session->userdata('logged_in');
		$this->Producto->vaciarCarrito($session_data['username']);
	}
	public function noRegistrado(){
		$data['volver'] = "http://localhost:8080/pccomponentes/index.php/home/";
		$this->load->view('publica/noRegistrado',$data);
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
