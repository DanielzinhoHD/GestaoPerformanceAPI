<?php

namespace App\Model;
use App\Model\ClassConexao;


class ClassGraficos extends ClassConexao{

  private $stmt;

  protected function selecionaClientes($userId)
  {
    $sql = 'SELECT * FROM `clientes` WHERE Usuarios_idUsuarios = ' . $userId;

    $this->stmt = $this->conexaoDB()->prepare($sql);
    $this->stmt->execute();
    $clients = $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
    $stmt = null;
    
    return $clients;
  }

}