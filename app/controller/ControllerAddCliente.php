<?php

namespace App\Controller;

use Src\Classes\classRender;
use App\Model\ClassAddCliente;

class ControllerAddCliente extends ClassAddCliente{
  protected $cliente;
  protected $usuario;

  public function receberUsuario()
  {
    if(isset($_SESSION['id'])){
      $this->usuario = $_SESSION['id'];
    }
  }

  public function receberVariaveis()
  {
    if($_POST['cliente'] != ''){
      $this->cliente = ucfirst($_POST['cliente']);
    }else{
      return false;
    }
    return true;
  }

  public function addCliente()
  {
    $this->receberUsuario();

    if($this->receberVariaveis() == false){
      $msg = "Você precisa preencher o input com o nome do cliente!";

      echo $msg;
      exit();
    }
  // Se retornar um array, então já existe um cliente com esse nome cadastrado;
    if(parent::clienteExiste($this->cliente) !== []){
      $msg = "Esse cliente já foi cadastrado!";

      echo $msg;
      exit();
    }

    parent::inserirCliente($this->usuario, $this->cliente);
  }
}

