<?php

namespace App\Controller;

use Src\Classes\classRender;
use App\Model\ClassGraficos;

class ControllerGraficos extends ClassGraficos{

  protected $userId;
  protected $clientId;

  protected $projeto;
  protected $data_inicial;
  protected $data_final;

  public function __construct()
  {
    if(isset($_POST['change'])){
      $isChange = $_POST['change'];
    }

    if(!isset($_SESSION['id'])){
      if(file_exists(DIRREQ."app/controller/ControllerHome.php")){
      // Redireciona usuário pra tela inicial se já estiver logado;
        header("Location: ".DIRPAGE);
        exit();
      }else{
        echo 'Você não está logado!';
      }
    }
    else{
      if(!isset($isChange)){
        $Render = new classRender;
        $Render->setDescription("Página de seleção de gráficos");
        $Render->setKeywords("cabeamento,smartfast,performance");
        $Render->setTitle("Smartfast Gráficos");
        $Render->setDir("graficos/");
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

  public function receberProjeto()
  {
    $this->projeto = $_POST['projeto'];
  }

  public function receberDataInicial()
  {
    $this->data_inicial = $_POST['data_inicial'];
  }

  public function receberDataFinal()
  {
    $this->data_final = $_POST['data_final'];
  }

  public function retornaClientes()
  {
    $this->receberUserId();
    return parent::selecionaClientes($this->userId);
  }

  public function retornaProjeto()
  {
    $this->receberUserId();
    $this->receberClientId();

    echo parent::selecionaProjeto($this->userId, $this->clientId);
  }

    public function getDatabaseConfigMysql()
    {
        return [
            'driver'   => 'mysql',
            'host'     => 
            'port'     => 
            'username' => 
            'password' => 
            'database' => 
        ];
    }
 
    public function generateReport()
    {   
    $this->receberProjeto();
    $this->receberDataInicial();
    $this->receberDataFinal();

     switch ($this->projeto) {
       case 'Tempo Médio por Tipo de Infraestrutura':
         $nome = 'GrafTempoMedioXTipoInfra';
         $arrayParam = array(
           'titulo_relatorio' => $this->projeto,
           'datainicial' => $this->data_inicial,
           'datafinal' => $this->data_final
         );
         break;
       case 'Tempo Médio por Projeto':
         $nome = 'GrafTempoMedioXProjeto';
         $arrayParam = array(
          'titulo_relatorio' => $this->projeto,
          'datainicial' => $this->data_inicial,
          'datafinal' => $this->data_final
         );
         break;
       case 'Total Instalado por Projeto':
         $nome = 'GrafTotatInstaladoXProjeto';      
         $arrayParam = array(
          'titulo_relatorio' => $this->projeto,
          'datainicial' => $this->data_inicial,
          'datafinal' => $this->data_final
         );
         break;
       case 'Instalado do Projeto por Dia':
         $nome = 'GrafInstaladoXDiaXProjeto';
         $arrayParam = array(
           'titulo_relatorio' => $request['titulo_relatorio'],
           'codigoprojeto' => $request['codigoprojeto'],
           'datainicial' => $request['datainicial'],
           'datafinal' => $request['datafinal']
         );
         break;
         case 'Instalado do Projeto por Dia':
           $nome = 'GrafInstaladoXDiaXProjeto';
           $arrayParam = array(
             'titulo_relatorio' => $request['titulo_relatorio'],
             'codigoprojeto' => $request['codigoprojeto'],
             'datainicial' => $request['datainicial'],
             'datafinal' => $request['datafinal']
           );
         break;
     }
 
     $jasper = new JasperPHP;
     $extensao = 'pdf' ;
     $filename =  $nome  . time();
     $inputCompile = 'D:\Softwares\Programacao\Web\XAMPP\htdocs\SmartFast\public\reportsTemplates/' . $nome . '.jrxml';
     $jasper->compile($inputCompile)->execute();
     $inputProcess = 'D:\Softwares\Programacao\Web\XAMPP\htdocs\SmartFast\public\reportsTemplates/' . $nome . '.jasper';
     /* $output = './public/reportsTemplates/' . $filename; */
     $output = sys_get_temp_dir() . "/" . $filename;
     
     $jasper->process(
       $inputProcess,
       $output,
       array($extensao),
       $arrayParam,
       getDatabaseConfigMysql(),
       true,
       true,
       "pt_BR"
     )->execute();
 
     $PDFfile = $output . "." . $extensao;
 
 
     
     
     header('Content-Description: File Transfer');
     header('Content-Type: application/pdf');
     header('Content-Disposition: attachment; filename="'. $PDFfile .'"');
     header('Expires: 0');
     header('Cache-Control: must-revalidate');
     header('Pragma: public');
     header('Content-Length: ' . filesize($PDFfile));
     readfile($PDFfile);
     !unlink($PDFfile);
     
 
 
     }
 
 
}
