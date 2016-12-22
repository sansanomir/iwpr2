<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestion extends CI_Controller {

    public function __construct(){
        parent::__construct();
        
        //podemos cargarla en el autoload también
        $this->load->database();
        
        $this->load->library("Grocery_CRUD");
    }
    
	public function index()
	{
        
        
        $crud = new Grocery_CRUD();
        $crud->set_table("User");
        $crud->set_subject("User");
        
        $output = $crud->render();
        //$output["titulo"] = "Mantenimiento de clientes";
        //$output["tituloH1"] = "Mantenimiento de clientes";
        
		$this->load->view('gestion/index', $output);
	}
}
?>