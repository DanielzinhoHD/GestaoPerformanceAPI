<?php

namespace App\Controller;

use Src\Classes\classRender;
use App\Model\ClassFormulario;


class ControllerFormulario extends ClassFormulario{

  protected $userId;
  protected $clientId;

  protected $equipe;
  protected $date;
  protected $infra_estrutura;
  protected $infra_estrutura_num;
  protected $cabeamento;
  protected $cabeamento_num;
  protected $conectorizacao;
  protected $conectorizacao_num;
  protected $tempo_conclusao;
  protected $projeto;
  protected $obs;

  public function __construct()
  {
    if(isset($_POST['change'])){
      $isChange = $_POST['change'];
    }

    if(!isset($_SESSION['id'])){
      if(file_exists(DIRREQ."app/controller/ControllerLogin.php")){
      // Redireciona usuário pra tela inicial se já estiver logado;
        header("Location: ".DIRPAGE.'login');
        exit();
      }else{
        echo 'Você não está logado!';
      }
    }
    else{
      if(!isset($isChange)){
        $Render = new classRender;
        $Render->setDescription("Página preenchimento do formulario");
        $Render->setKeywords("cabeamento,smartfast,performance");
        $Render->setTitle("Smartfast Formulario");
        $Render->setDir("formulario/");
        $Render->renderLayout();
      }
    }
  }

  public function receberUserId()
  {
    $this->userId = $_SESSION['id'];
  }

  public function receberClientId()
  {
    $this->clientId = $_POST['clientId'];
  }

  public function retornaClientes()
  {
    $this->receberUserId();
    return parent::selecionaClientes($this->userId);
  }

  public function retornaInfraEstrutura()
  {
    return parent::selecionaInfraEstrutura();
  }

  public function retornaCabeamento()
  {
    return parent::selecionaCabeamento();
  }

  public function retornaConector()
  {
    return parent::selecionaConector();
  }

  public function retornaProjeto()
  {
    $this->receberUserId();
    $this->receberClientId();

    echo parent::selecionaProjeto($this->userId, $this->clientId);
  }

  public function receberVariaveis()
  {
    $this->receberUserId();
    $this->receberClientId();

    if($_POST['equipe'] !== ''){
      $this->equipe=filter_input(INPUT_POST, 'equipe', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
      return false;
    }
    if($_POST['date'] !== ''){
      $this->date=filter_input(INPUT_POST, 'date', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
      return false;
    }
    if($_POST['infra_estrutura'] !== ''){
      $this->infra_estrutura=filter_input(INPUT_POST, 'infra_estrutura', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
      return false;
    }
    if($_POST['infra_estrutura_num'] !== ''){
      $this->infra_estrutura_num=filter_input(INPUT_POST, 'infra_estrutura_num', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
      return false;
    }
    if($_POST['cabeamento'] !== ''){
      $this->cabeamento=filter_input(INPUT_POST, 'cabeamento', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
      return false;
    }
    if($_POST['cabeamento_num'] !== ''){
      $this->cabeamento_num=filter_input(INPUT_POST, 'cabeamento_num', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
      return false;
    }
    if($_POST['conectorizacao'] !== ''){
      $this->conectorizacao=filter_input(INPUT_POST, 'conectorizacao', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
      return false;
    }
    if($_POST['conectorizacao_num'] !== ''){
      $this->conectorizacao_num=filter_input(INPUT_POST, 'conectorizacao_num', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
      return false;
    }
    if($_POST['tempo_conclusao'] !== ''){
      $this->tempo_conclusao=filter_input(INPUT_POST, 'tempo_conclusao', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
      return false;
    }
    if($_POST['projeto'] !== ''){
      $this->projeto=filter_input(INPUT_POST, 'projeto', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
      return false;
    }
    if($_POST['obs'] !== ''){
      $this->obs=filter_input(INPUT_POST, 'obs', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    return true;
  }

  public function salvarFormulario()
  {
    if($this->receberVariaveis() == false){
      $error_msg = 'Você precisa preencher todos os campos!';
      
      echo $error_msg;
      exit();
    }else{
      parent::cadastrarFormulario(
        $this->userId,
        $this->clientId,
        $this->equipe,
        $this->date,
        $this->infra_estrutura,
        $this->infra_estrutura_num, 
        $this->cabeamento,
        $this->cabeamento_num, 
        $this->conectorizacao, 
        $this->conectorizacao_num, 
        $this->tempo_conclusao, 
        $this->projeto,
        $this->obs
      );
    };
  }
}
