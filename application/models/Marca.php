<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marca extends CI_Model {

  public function getMarcaByOid($oid){
    $this -> db -> select('oid, nombre');
    $this -> db -> from('marcas');
    $this -> db -> where('oid', $oid);
    $query = $this -> db -> get();
    if($query ->num_rows() > -1)
      return $query->result();
    else 
      return false;
  }

}
?>