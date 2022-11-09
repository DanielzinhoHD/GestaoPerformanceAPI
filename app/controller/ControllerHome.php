<?php
namespace App\Controller;

use Src\Classes\classRender;
use Src\Interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView{

  public function __construct()
  {
    $this->setTitle("Smartfast Home");
    $this->setDescription("Site para registrar a performance de equipes");
    $this->setKeywords("cabeamento,smartfast,performance");
    $this->setDir("home/");
    $this->renderLayout();
  }
}