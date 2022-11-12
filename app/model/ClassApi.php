<?php

namespace App\Model;

use App\Model\ClassConexao;
use Src\Traits\TraitUrlParser;

class ClassApi extends ClassConexao{

  use TraitUrlParser;

  protected $stmt;

  protected function pegarIdPelaURL(){
    $url = $this->parseUrl();

    if(count($url) == 2){
      return $url[1];
    }else{
      return false;
    }
  }

  protected function criadorDeMensagens($bool, $obj){
    if(!$bool){
      return array('status' => 'failure', 'data' => '');
    }
    return array('status' => 'success', 'data' => $obj);
  }

  protected function retornaProjetos()
  {
    $id = self::pegarIdPelaURL();

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
    WHERE
      p.idProjeto=?
    ORDER BY 
      p.data_inicio ASC;';

    $this->stmt = $this->conexaoDB()->prepare($sql);
    $this->stmt->execute(array($id));
    $projeto = $this->stmt->fetch(\PDO::FETCH_ASSOC);
    $this->stmt = null;

    if(!$projeto){
      return self::criadorDeMensagens(false, '');
    }
    return self::criadorDeMensagens($id,$projeto);
  }
}