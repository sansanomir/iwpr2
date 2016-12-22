<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $data["titulo"] = "Bienvenido a mi web...";
        $data["tituloH1"] = "Bienvenido a mi webH1...";

		$this->load->view('home/index', $data);
	}
    
    public function acercade(){
        $data["titulo"] = "Bienvenido a mi web...";
        $data["tituloH1"] = "Culpables de este sitio web.";

		$this->load->view('home/acercade', $data);
    }
}
?>