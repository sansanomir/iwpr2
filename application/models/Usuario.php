<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model {
  function login($username, $password)
  {
    echo($username);
    echo($password);
     $this -> db -> select('oid, userName, password');
     $this -> db -> from('user');
     $this -> db -> where('userName', $username);
     //$this -> db -> where('password', MD5($password));
     $this -> db -> where('password', $password);
     $this -> db -> limit(1);

     $query = $this -> db -> get();

     if($query -> num_rows() == 1)
     {
       return $query->result();
     }
     else
     {
       return false;
     }
  }
}
?>
