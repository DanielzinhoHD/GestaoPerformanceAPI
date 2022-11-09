<?php

namespace App\Model;

use App\Model\ClassConexao;

class ClassAddCliente extends ClassConexao{
  protected $stmt;

  public function clienteExiste($cliente)
  {
    $sql = "SELECT * FROM clientes WHERE nome_cliente = ?;";

    $this->stmt = $this->conexaoDB()->prepare($sql);
    $this->stmt->execute(array($cliente));
    $cliente = $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
    $this->stmt = null;

    return $cliente;
  }

  public function inserirCliente($usuario, $cliente)
  {
    $sql = "INSERT INTO clientes (Usuarios_idUsuarios, nome_cliente) VALUES (?, ?);";

    $this->stmt = $this->conexaoDB()->prepare($sql);
    $this->stmt->execute(array($usuario, $cliente));
    $this->stmt = null;
  }
}