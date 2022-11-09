<?php

namespace App\Model;

use App\Model\ClassConexao;

class ClassLogin extends ClassConexao{
  // private $db=$this->conexaoDB();
  private $stmt;

// Função que verifica se email existe (retorna o email se existir, caso contrário retorna false);
  protected function existingEmail($email)
  {
    $sql = "SELECT * FROM usuarios WHERE email = ?;";
    
    $this->stmt = $this->conexaoDB()->prepare($sql);
    $this->stmt->execute(array($email));
    $result = $this->stmt->fetch(\PDO::FETCH_ASSOC);
    $this->stmt = null;
    
    return $result;
  }

// Função para login;
  protected function loginUser($email, $pw)
  {
    $userEmail = self::existingEmail($email);
  
  // Verifica se usuário existe;
    if($userEmail === false){
      echo 'Email não existe!';
      exit();
    }else{
      $hashedPw = $userEmail['senha'];
      $checkedPw = password_verify($pw, $hashedPw);
    
    // Verifica se as senhas são iguais;
      if($checkedPw === false){
        echo 'Senha errada!';
        exit();
      }else if($checkedPw === true){
        // session_start();
        $_SESSION["id"] = $userEmail["idUsuarios"];
        $_SESSION["name"] = $userEmail["nome"];
        exit();
      }
    }
  }

}