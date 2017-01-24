<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model {
  function login($username, $password){
     $this -> db -> select('oid, userName, password, nombre, email, direccion, cuenta, carrooid');
     $this -> db -> from('user');
     $this -> db -> where('userName', $username);
     $this -> db -> where('password', MD5($password));
     $this -> db -> limit(1);
     $query = $this -> db -> get();
     if($query -> num_rows() == 1)
       return $query->result();
     else
       return false;
  }

  function registro($username,$password,$nombre,$email,$direccion,$cuenta){
    $this -> db -> select('oid, userName, password');
    $this -> db -> from('user');
    $this -> db -> where('userName', $username);
    $query = $this -> db -> get();
    if($query -> num_rows() == 1)
      return false;
    else{
      $data = array(
        'userName' => $username ,
        'password' => MD5($password) ,
        'nombre' => $nombre,
        'email' => $email ,
        'direccion' => $direccion ,
        'cuenta' => $cuenta
      );
      $this->db->insert('user',$data);
      return true;
    }
  }
}
?>
