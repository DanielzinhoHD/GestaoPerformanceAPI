<?php
use App\Controller\ControllerAddProjeto;

$usuario = new ControllerAddProjeto();
?>

<div class="container" id="tamanhoContainer">
    <h4>Adicionar Projeto</h4>

    <form method="POST">
      <div class="form-group">
        <label for="">Proposta</label>
        <input name="proposta" type="text" class="form-control" placeholder=" Insira as informações"/>
      </div>
      <div class="form-group">
        <label for=""> Cliente</label>
        <select class="form-control" name="cliente">   
        <?php
          echo '<option disabled selected value> ----- </option>';

          $clientes = $usuario->retornaClientes();
          // Faz um loop pela tabela e escreve ela na tela
          foreach($clientes as $key => $value){
            echo '<option value='.$value['idClientes'].'>'.$value['nome_cliente'].'</option>';
          }
        ?>
      </select>
      </div>
      <div class="form-group">
        <label for="">Data Inicio</label>
        <input name="data-inicio" type="date" class="form-control" />
      </div>
      <div class="form-group">
        <label for="">Data Fim</label>
        <input name="data-fim" type="date" class="form-control" />
      </div>
      <p id="error-msg"></p>
      <div style="text-align: right">
        <button name="submit" type="submit" id="botão" class="btn btn-sm">
          Novo Projeto
        </button>
        <button type="button" class="btn btn-info btn-sm" onclick="location.href='<?php echo DIRPAGE.'projetos'?>'">
          Voltar
        </button>
      </div>
    
    </form>
  </div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<?php include_once DIRJS.'addProjeto.php'?>
