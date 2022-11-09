<?php

#Atualização direto no DB

protected function atualizarClientes($Id, $Nome, $Sexo, $Cidade){
  $BFetch=$this->Db=$this->conexaoDB()-> prepare("update teste set Nome=:nome and Sexo=:sexo and Cidade=:cidade where Id=:id");
  $BFetch->bindParam(":id",$Id,\PDO::PARAM_INT);
  $BFetch->bindParam(":nome",$Nome,\PDO::PARAM_STR);
  $BFetch->bindParam(":sexo",$Sexo,\PDO::PARAM_STR);
  $BFetch->bindParam(":cidade",$Cidade,\PDO::PARAM_STR);
  $BFetch->execute();
}



