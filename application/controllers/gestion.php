<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestion extends CI_Controller {

    public function __construct(){
      parent::__construct();
      //podemos cargarla en el autoload también
      $this->load->database();
      $this->load->library("Grocery_CRUD");
    }
  public function usuarios()
	{
    $crud = new Grocery_CRUD();
    $crud->set_table("user");
    $crud->set_subject("Usuario");
    $output = $crud->render();
    $this->load->view('gestion/usuarios', $output);
	}

	public function productos()
	{
    $crud = new Grocery_CRUD();
    $crud->set_table("producto");
    $crud->set_subject("Producto");
    $output = $crud->render();
    $this->load->view('gestion/productos', $output);
	}

  public function categorias()
	{
    $crud = new Grocery_CRUD();
    $crud->set_table("categoria");
    $crud->set_subject("Categoria");
    $crud->columns('oid','nombre');
    $output = $crud->render();
    $this->load->view('gestion/categorias',$output);
	}

  public function subcategorias()
	{
    $cruds = new Grocery_CRUD();
    $cruds->set_table("subcategoria");
    $cruds->display_as('categoriaoid','En categoria');
    $cruds->set_subject("SubCategoria");
    $cruds->set_relation('categoriaoid','categoria','nombre');
    $cruds->columns('oid','nombre','categoriaoid');
    $output = $cruds->render();
    $this->load->view('gestion/subcategorias',$output);
	}

  public function opiniones()
	{
    $crud = new Grocery_CRUD();
    $crud->set_table("opinion");
    $crud->set_subject("Opinion");
    $output = $crud->render();
    $this->load->view('gestion/opiniones', $output);
	}
}
?>
