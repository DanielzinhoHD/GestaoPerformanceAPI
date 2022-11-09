<?php

#Arquivos diretórios raízes;

// $PastaInterna= 'GestaoPerformance/';
$PastaInterna='GestaoPerformance/';
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");

if(substr($_SERVER['DOCUMENT_ROOT'], -1) == '/'){
  define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
}else{
  define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
}

#DIretórios Específicos;
define('DIRIMG', DIRPAGE."public/img/");
define('DIRCSS', DIRPAGE."public/css/");
define('DIRJS', DIRREQ."public/js/");
define('DIRADM', DIRPAGE."public/adm/");

#Acesso ao banco de dados;
define('HOST', "localhost");
define('DB', "smartfast");
define('USER', "root");
define('PW', "");