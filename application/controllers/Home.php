<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$data["titulo"] = "PCComponentes";
		$this->load->view('home/index', $data);
	}
	public function gestion(){
		$data["titulo"] = "Bienvenido a mi web...";
		$data["tituloH1"] = "Culpables de este sitio web.";
		$this->load->view('gestion/index', $data);
	}

	public function categorias(){
		$data["titulo"] = "Bienvenido a mi web...";
		$data["tituloH1"] = "Culpables de este sitio web.";
		$this->load->view('gestion/categorias', $data);
	}
    public function acercade(){
		$data["tituloH1"] = "Culpables de este sitio web.";
		$this->load->view('home/acercade', $data);
    }
}
?>
