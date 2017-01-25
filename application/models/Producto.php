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

  function anyadirAlCarro($productooid,$cantidad,$username){
    echo $productooid;
    $identificadorUsuario;
    $this -> db -> select('oid, userName, carrooid');
    $this -> db -> from('user');
    $this -> db -> where('userName', $username);
    $query = $this -> db -> get();
    $result = $query->result();
    foreach($result as $row){
      $identificadorCarro = $row->carrooid;
      $identificadorUsuario = $row->oid;
    }
    if($identificadorCarro == null){
      //creamos carrito para el usuario
      $data = array(
        'useroid' => $identificadorUsuario ,
      );
      $this->db->insert('carro',$data);
      $this -> db -> select('oid, useroid');
      $this -> db -> from('carro');
      $this -> db -> where('useroid', $identificadorUsuario);
      $query = $this -> db -> get();
      foreach($result as $row){
        $identificadorCarro = $row->oid;
      }
    }

    $this -> db -> select('oid, cantidad, productooid, carrooid');
    $this -> db -> from('lineapedido');
    $this -> db -> where('productooid', $productooid);
    $this -> db -> where('carrooid', $identificadorCarro);
    $query = $this -> db -> get();
    if($query -> num_rows() > 0){
      //modificar cantidad solo
      echo"modificar cantidad solo";
    }
    else{
      $precio;
      $stockExistente;
      $this -> db -> select('oid, nombre, descripcion, precio, stock, subcategoriaoid, marcasoid, ofertaoid');
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
          'precioTotal' => $precio*$cantidad,
          'productooid' => $productooid,
          'carrooid' => $identificadorCarro
        );
        $this->db->insert('lineapedido',$dataLineapedido);

        $this->db->set('stock','stock-$cantidad',FALSE);
        $this->db->where('oid',$productooid);
        $this->db->uptade('producto');
        return true;
      }
    }
  }

  public function getProductosCarrito($username){
    $this -> db -> select('oid, userName, carrooid');
    $this -> db -> from('user');
    $this -> db -> where('userName', $username);
    $query = $this -> db -> get();
    $result = $query->result();
    foreach($result as $row){
      $identificadorCarro = $row->carrooid;
    }
    $productosCarrito = array();
    $arrayName = array();
    if($this->session->userdata('logged_in')){
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
