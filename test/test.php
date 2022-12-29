<?php
session_start();//開啟session
date_default_timezone_set("asia/taipei");

class DB{
   protected $dsn="mysql:host=localhost;charset=utf8;dbname=db23;";
   protected $table;
   protected $pdo;

   public function __construct($table)
   {     
      $this->table = $table;
      $this->pdo=new PDO($this->dsn,'root','');  
   }
}
?>