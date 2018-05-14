<?php

class Database{

  private $link;
  private $host,$database,$user,$password;
  private $sgbd;


  
  public function __construct($host,$database,$user,$password,$sgbd){
    $this->host = $host;
    $this->database = $database;
    $this->user = $user;
    $this->password = $password;
    $this->sgbd= $sgbd;
  }


    public function query($statements){

      $conn = mysql_connect($this->host, $this->user, $this->password);
      if (!$conn) {
        die("Connection failed: " . mysql_connect_error());
      }
      mysql_set_charset('utf8');

      $this->link = $conn;

      mysql_select_db( $this->database , $conn  );

      $req = mysql_query($statements);
      mysql_close(); 
      return $req;
      
    }



    
  }