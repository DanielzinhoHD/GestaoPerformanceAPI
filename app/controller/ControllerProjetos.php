<?php

namespace App\Controller;

use Src\Classes\classRender;
use App\Model\ClassProjetos;

class ControllerProjetos extends ClassProjetos{
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
    }else{
      $Render = new classRender;
      $Render->setDescription("Página de projetos");
      $Render->setKeywords("cabeamento,smartfast,performance,projetos");
      $Render->setTitle("Smartfast Projetos");
      $Render->setDir("projetos/home/");
      $Render->renderLayout();
    }
  }
}