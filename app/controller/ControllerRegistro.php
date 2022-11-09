<?php

namespace App\Controller;
use Src\Classes\classRender;
use App\Model\ClassRegistro;

Class ControllerRegistro extends ClassRegistro{
    protected $nome;
    protected $email;
    protected $pw;
    protected $pw2;

    public function __construct()
    {
        if(isset($_POST['submit'])){
            $isSubmitted = $_POST['submit'];
        }
        if(isset($_SESSION['id'])){
            if(file_exists(DIRREQ.'App\Controller\ControllerHome.php')){
                header('location: '.DIRPAGE);
                exit();
            }
            else{
                echo 'Você já está logado ';
            }
        }
        else
        {
            if(!isset($isSubmitted)){
                $Render = new classRender;
                $Render->setDescription("Página de Registro");
                $Render->setKeywords("cabeamento,smartfast,performance");
                $Render->setTitle("Smartfast Registro");
                $Render->setDir("registro/");
                $Render->renderLayout(); 
            }
        }
    }
    public function ReceberVariaveis()
    {
        if($_POST['nome'] !== ''){
            $this->nome=filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        }else{
            return false;
        }

        if($_POST['email'] !== ''){
            $this->email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        }else{
            return false;
        }

        if($_POST['senha'] !== ''){
            $this->pw=filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
        }else{
            return false;
        }

        if($_POST['Confirmarsenha'] !== ''){
            $this->pw2=filter_input(INPUT_POST, 'Confirmarsenha', FILTER_SANITIZE_SPECIAL_CHARS);
        }else{
            return false;
        }

        return true;
    }
    public function Cadastrar()
    {
        if($this->ReceberVariaveis() == false){
            $msg = 'Você precisa preencher todos os inputs!';

            echo $msg;
            exit();
        }

        if(!parent::pwdMatch($this->pw,$this->pw2)){
            echo 'As senhas devem ser iguais!';
            exit();
        }

        parent::createUser($this->nome,$this->email,$this->pw);
    }
}