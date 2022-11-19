<?php

namespace App\Controller;
use Src\Classes\classRender;
use App\Model\ClassRegistro;

Class ControllerRegistro extends ClassRegistro{
    protected $nome;
    protected $email;
    protected $pw;
    protected $pw2;
    protected $cep;
    protected $logradouro;
    protected $complemento;
    protected $bairro;
    protected $localidade;
    protected $uf;
    protected $numero;

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

        if($_POST['cep'] !== ''){
            $this->cep=filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);
        }else{
            return false;
        }

        if($_POST['logradouro'] !== ''){
            $this->logradouro=filter_input(INPUT_POST, 'logradouro', FILTER_SANITIZE_SPECIAL_CHARS);
        }else{
            return false;
        }

        if($_POST['complemento'] !== ''){
            $this->complemento=filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_SPECIAL_CHARS);
        }else{
            return false;
        }

        if($_POST['bairro'] !== ''){
            $this->bairro=filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
        }else{
            return false;
        }

        if($_POST['localidade'] !== ''){
            $this->localidade=filter_input(INPUT_POST, 'localidade', FILTER_SANITIZE_SPECIAL_CHARS);
        }else{
            return false;
        }

        if($_POST['uf'] !== ''){
            $this->uf=filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_SPECIAL_CHARS);
        }else{
            return false;
        }

        if($_POST['numero'] !== ''){
            $this->numero=filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS);
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

        parent::createUser($this->nome,$this->email,$this->pw,$this->cep,$this->logradouro,$this->complemento,$this->bairro,$this->localidade,$this->uf,$this->numero);
    }
}