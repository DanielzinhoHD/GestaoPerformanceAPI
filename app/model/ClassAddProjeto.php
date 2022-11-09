<?php

namespace App\Model;

use App\Model\ClassConexao;

class ClassAddProjeto extends ClassConexao{
  private $stmt;

  protected function selecionaClientes($userId)
  {
    $sql = 'SELECT * FROM `clientes` WHERE Usuarios_idUsuarios = ' . $userId;

    $this->stmt = $this->conexaoDB()->prepare($sql);
    $this->stmt->execute();
    $clients = $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
    $this->stmt = null;
    
    return $clients;
  }

  protected function cadastrarProjeto($proposta, $clienteId, $dataInicio, $dataFim, $userId)
  {
    $sql = "INSERT INTO projeto (proposta, Clientes_idClientes, data_inicio, data_termino, Usuarios_idUsuarios) VALUES (?, ?, ?, ?, ?);";
    $this->stmt = $this->conexaoDB()->prepare($sql);       
    
    $this->stmt->execute(array($proposta,$clienteId,$dataInicio, $dataFim, $userId));        
    $this->stmt = null;       
    exit();
  }
}