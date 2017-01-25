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

  function anyadirAlCarro($productooid,$cantidad){
    $this -> db -> select('oid, cantidad, productooid');
    $this -> db -> from('lineapedido');
    $this -> db -> where('productooid', $productooid);
    $query = $this -> db -> get();
    if($query -> num_rows() == 1){
      //modificar cantidad solo
    }
    else{
      $precio;
      $stockExistente;
      $this -> db -> select('oid, nombre, descripcion, precio, stock, subcategoria, marcasoid, ofertaoid');
      $this -> db -> from('producto');
      $this -> db -> where('oid', $productooid);
      $query = $this -> db -> get();
      $result = $query->result();
      foreach($result as $row){
          $precio = $row->precio;
          $stockExistente = $row->precio;
      }
      if ($stockExistente < 1){
        echo "No quedan unidades";
      }
      else{
        $dataLineapedido = array(
          'precio' => $precio ,
          'cantidad' => $cantidad ,
          'precioTotal' => (double)$precio * (int)$cantidad,
          'productooid' => $productooid,
          'carrooid' => $carrooid
        );
        $this->db->insert('lineapedido',$dataLineapedido);

        $this->db->set('stock','stock-$cantidad',FALSE);
        $this->db->where('oid',$productooid);
        $this->db->uptade('producto');
        return true;
      }
    }
  }

  public function getProductosCarrito($username,$carrooid){
    $productosCarrito = array();
    $arrayName = array();
    if($this->session->userdata('logged_in')){
      $identificadorCarro = $carrooid;
      $data = array();
      $oid;
      $this -> db -> select('oid, cantidad, precioTotal, productooid, carrooid');
      $this -> db -> from('lineapedido');
      $this -> db -> where('carrooid', $identificadorCarro);
      $query = $this -> db -> get();
      $result = $query->result();
      $index=0;
      foreach($result as $row){
        $productosCarrito[$index] = $row->productooid;
        $index++;
      }
      return $productosCarrito;
    }
  }

  public function getNombreByOid($oid){
    $this -> db -> select('oid, nombre, descripcion, precio, stock, subcategoriaoid, marcasoid, ofertaoid');
    $this -> db -> from('producto');
    $this -> db -> where('oid', $oid);
    
  }

  public function getProductoByOid($oid){
    $this -> db -> select('oid, nombre, descripcion, precio, stock, subcategoriaoid, marcasoid, ofertaoid');
    $this -> db -> from('producto');
    $this -> db -> where('oid', $oid);
    $query = $this -> db -> get();
    if($query ->num_rows() > -1)
      return $query->result();
    else 
      return false;
  }


}
?>
