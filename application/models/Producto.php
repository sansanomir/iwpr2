<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Model {

  function listaProductos() {
     $this -> db -> select('oid, nombre, descripcion, precio, stock, subcategoriaoid, marcasoid, ofertaoid');
     $this -> db -> from('producto');
     $query = $this -> db -> get();
     if($query ->num_rows() > -1)
       return $query->result();
     else
       return false;
  }

  function listaProductosSubcategoria($subcategoria){
     $this -> db -> select('oid, nombre, descripcion, precio, stock, subcategoriaoid, marcasoid, ofertaoid');
     $this -> db -> from('producto');
     $this -> db -> where('subcategoriaoid', $subcategoria);
     $query = $this -> db -> get();
     if($query ->num_rows() > -1)
       return $query->result();
     else
       return false;
  }

}
?>
