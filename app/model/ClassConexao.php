<?php

namespace App\Model;

class ClassConexao{

  #Conecta com a DB;
  public function conexaoDB(){
    try{
      $Con = new \PDO("mysql:host=".HOST.";dbname=".DB."","".USER."","".PW."");
      return $Con;
    }catch(\PDOException $error) {
      return $error->getMessage();
    }
  }

}