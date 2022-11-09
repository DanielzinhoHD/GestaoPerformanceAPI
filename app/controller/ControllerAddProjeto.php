<?php

namespace App\Controller;

use Src\Classes\classRender;
use App\Model\ClassAddProjeto;

class ControllerAddProjeto extends ClassAddProjeto{

  private $userId;
  private $clientId;
  private $proposta;
  private $dataInicio;
  private $dataFim;

  public function __construct()
  {
    if(isset($_POST['submit'])){
      $isSubmit = $_POST['submit'];
    }

    if(!isset($_SESSION['id'])){
      if(file_exists(DIRREQ."app/controller/ControllerLogin.php")){
      // Redireciona usuário pra tela inicial se já estiver logado;
        header("Location: ".DIRPAGE.'login');
        exit();
      }else{
        echo 'Você não está logado!';
      }
    }else{
      if(!isset($isSubmit)){
        $Render = new classRender;
        $Render->setDescription("Página de projetos");
        $Render->setKeywords("cabeamento,smartfast,performance,projetos");
        $Render->setTitle("Smartfast Projetos");
        $Render->setDir("projetos/addProjetos/");
        $Render->renderLayout();
      }
    }
  }

  public function receberUserId()
  {
    $this->userId = $_SESSION['id'];
  }

  public function retornaClientes()
  {
    $this->receberUserId();

    return parent::selecionaClientes($this->userId);
  }

  public function receberVariaveis()
  {
    $this->receberUserId();

    if($_POST['clientId'] !== ''){
      $this->clientId=filter_input(INPUT_POST, 'clientId', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
      return false;
    }

    if($_POST['proposta'] !== ''){
      $this->proposta=filter_input(INPUT_POST, 'proposta', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
      return false;
    }

    if($_POST['dataInicio'] !== ''){
      $this->dataInicio=filter_input(INPUT_POST, 'dataInicio', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
      return false;
    }

    if($_POST['dataFim'] !== ''){
      $this->dataFim=filter_input(INPUT_POST, 'dataFim', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
      return false;
    }
    
    return true;
  }

  public function salvarProjeto()
  {
    if($this->receberVariaveis() == false){
      $error_msg = 'Você precisa preencher todos os campos!';
      
      echo $error_msg;
      exit();
    }else{
      parent::cadastrarProjeto($this->proposta, $this->clientId, $this->dataInicio, $this->dataFim, $this->userId);
    };
  }
}