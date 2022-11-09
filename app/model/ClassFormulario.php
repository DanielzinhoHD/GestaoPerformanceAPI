<?php

namespace App\Model;
use App\Model\ClassConexao;


class ClassFormulario extends ClassConexao{

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

  protected function selecionaInfraEstrutura()
  {
    $sql = 'SELECT * FROM `infraestrutura`;';

    $this->stmt = $this->conexaoDB()->prepare($sql);
    $this->stmt->execute();
    $infraEstrutura = $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
    $this->stmt = null;
    
    return $infraEstrutura;
  }

  protected function selecionaCabeamento()
  {
    $sql = 'SELECT * FROM `cabeamento`;';

    $this->stmt = $this->conexaoDB()->prepare($sql);
    $this->stmt->execute();
    $cabeamento = $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
    $this->stmt = null;

    return $cabeamento;
  }

  protected function selecionaConector()
  {
    $sql = 'SELECT * FROM `conector`;';

    $this->stmt = $this->conexaoDB()->prepare($sql);
    $this->stmt->execute();
    $conector = $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
    $this->stmt = null;

    return $conector;
  }

  protected function selecionaProjeto($userId, $clientId)
  {
    $sql = 'SELECT proposta, idProjeto FROM `projeto` WHERE Usuarios_idUsuarios = ? AND Clientes_idClientes = ?';

    $this->stmt = $this->conexaoDB()->prepare($sql);
    $this->stmt->execute(array($userId, $clientId));
    $projetos = $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
    $this->stmt = null;

    return json_encode($projetos);
  }

  // Função para cadastro;
  protected function cadastrarFormulario(
    $userId, 
    $cliente, 
    $equipe, 
    $date, 
    $infra_estrutura, 
    $infra_estrutura_num, 
    $cabeamento, 
    $cabeamento_num, 
    $conectorizacao, 
    $conectorizacao_num, 
    $tempo_conclusao, 
    $projeto, 
    $obs
  )
  {
    $sql = "INSERT INTO cadastro (
      Usuarios_idUsuarios,
      infraEstrutura_idinfraEstrutura,
      quantidade_InfraEstrutura,
      Projeto_idProjeto,
      Conector_idConector,
      quantidade_Conector,
      Cabeamento_idCabeamento,
      quantidade_Cabeamento,
      Clientes_idClientes,
      equipe,
      data_cadastro,
      tempo_conclusao,
      observacoes
      ) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $this->stmt=$this->conexaoDB()->prepare($sql);

    $this->stmt->execute(array(
      $userId,
      $infra_estrutura,
      $infra_estrutura_num,
      $projeto,
      $conectorizacao,
      $conectorizacao_num,
      $cabeamento,
      $cabeamento_num,
      $cliente,
      $equipe,
      $date,
      $tempo_conclusao,
      $obs
    ));        

    $this->stmt = null;
    exit();
  }
}