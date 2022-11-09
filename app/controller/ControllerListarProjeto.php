<?php

namespace App\Controller;

use Src\Classes\classRender;
use App\Model\ClassListarProjeto;

class ControllerListarProjeto extends ClassListarProjeto{
  public function __construct()
  {
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
      // if(!isset($isSubmitted)){
        $Render = new classRender;
        $Render->setDescription("Página de listagem de projetos");
        $Render->setKeywords("cabeamento,smartfast,performance,lista de projetos");
        $Render->setTitle("Smartfast Lista de Projetos");
        $Render->setDir("projetos/listarProjetos/");
        $Render->renderLayout();
      // }
    }
  }

  public function retornaProjetos()
  {
    return parent::selecionaProjetos();
  }
}