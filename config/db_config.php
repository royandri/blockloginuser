<?php

 //inisialisasi variabel data pada database
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','blocklogin');


// membuat class oop untuk koneksi database
class Dbconfig {
  var $conn;
  function __construct() {
      $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
      if($this->conn->connect_error){
        echo $this->conn->connect_error;
      }
  }
  function ret_obj(){
    return $this->conn;
  }
}
?>
