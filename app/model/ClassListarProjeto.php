<?php

namespace App\Model;

use App\Model\ClassConexao;

class ClassListarProjeto extends ClassConexao{

  protected $stmt;

  protected function selecionaProjetos()
  {
    $sql = 'SELECT 
      p.idProjeto,
      p.proposta, 
      p.data_inicio, 
      p.data_termino, 
      c.nome_cliente 
    FROM 
      clientes c
    RIGHT JOIN 
      projeto p 
    ON 
      p.Clientes_idClientes=c.idClientes 
    ORDER BY 
      p.data_inicio ASC;';

    $this->stmt = $this->conexaoDB()->prepare($sql);
    $this->stmt->execute();
    $projetos = $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
    $this->stmt = null;

    return $projetos;
  }
}