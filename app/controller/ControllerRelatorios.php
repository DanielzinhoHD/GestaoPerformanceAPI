<?php

namespace App\Controller;

use Src\Classes\classRender;
// use src\vendor\cossou\jasperphp\src\JasperPHP;

// $jasper = new JasperPHP;


class ControllerRelatorios{

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
        $Render->setDescription("Página de seleção de relatórios");
        $Render->setKeywords("cabeamento,smartfast,performance");
        $Render->setTitle("Smartfast Relatórios");
        $Render->setDir("relatorios/");
        $Render->renderLayout();
      }
    }
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

    // public function getDatabaseConfigMysql()
    // {
    //     return [
    //         'driver'   => 'mysql',
    //         'host'     => 
    //         'port'     => 
    //         'username' => 
    //         'password' => 
    //         'database' => 
    //     ];
    // }
 
    public function generateReport()
    {   
    $this->receberProjeto();
    $this->receberDataInicial();
    $this->receberDataFinal();

     switch ($this->projeto) {
       case 'Atividades em Andamento':
             $nome = 'RelAtividades';
             $arrayParam = array(
               'datainicial' => $request['datainicial'],
               'datafinal' => $request['datafinal']
             );
         break;
         case 'Atividades Finalizadas':
             $nome = 'RelAtividadesFinalizadas';
             $arrayParam = array(
               'datainicial' => $request['datainicial'],
               'datafinal' => $request['datafinal']
             );
         break;
         case 'Clientes':
             $nome = 'RelClientes';
             $arrayParam = array();
         break;
         case 'Projetos':
             $nome = 'RelProjetos';
             $arrayParam = array(
               'datainicial' => $request['datainicial'],
               'datafinal' => $request['datafinal']
             );
         break;
     }
 
     
     $extensao = 'pdf' ;
     $filename =  $nome  . time();
    //  $inputCompile = 'D:\Softwares\Programacao\Web\XAMPP\htdocs\SmartFast\public\reportsTemplates/' . $nome . '.jrxml';
    //  $jasper->compile($inputCompile)->execute();
     $inputProcess = 'public\relatorios' . $nome . '.jasper';
     /* $output = './public/reportsTemplates/' . $filename; */
     $output = sys_get_temp_dir() . "/" . $filename;
     
     $jasper->process(
       $inputProcess,
       $output,
       array($extensao),
       $arrayParam,
       $this->getDatabaseConfigMysql(),
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
