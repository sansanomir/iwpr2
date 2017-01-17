<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestion extends CI_Controller {

    public function __construct(){
      parent::__construct();
      //podemos cargarla en el autoload también
      $this->load->database();
      $this->load->library("Grocery_CRUD");
    }

	public function productos()
	{
    $crud = new Grocery_CRUD();
    $crud->set_table("Producto");
    $crud->set_subject("Producto");
    $output = $crud->render();
    $this->load->view('gestion/productos', $output);
	}

  public function categorias()
	{
    $crud = new Grocery_CRUD();
    $crud->set_table("Categoria");
    $crud->set_subject("Categoria");
    $output = $crud->render();
    $this->load->view('gestion/categorias', $output);
	}

  public function opiniones()
	{
    $crud = new Grocery_CRUD();
    $crud->set_table("Opinion");
    $crud->set_subject("Opinion");
    $output = $crud->render();
    $this->load->view('gestion/opiniones', $output);
	}
}
?>
