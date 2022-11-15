<?php
use App\Controller\ControllerFormulario;

$usuario = new ControllerFormulario();
?>


<!-- JavaScript Bundle with Popper -->

<div class="container-fluid">

  <hr />

  <div class="row  mb-3 p-2 justify-content-md-center">
    
    <!--Adicionar Projeto -->
    <div class="col-lg-4 col-md-6 mb-3">
      
      <div class="card">

        <div class="card-header">
          <hi class="card-title">Formulário de Atividades</hi>
        </div>
        
        <div class="card-body">

          <form method="POST">
              <div class="form-group">
                <label> Cliente</label>
              <!-- Importar os dados da tabela de clientes, se o ID do usuário for o mesmo ID da FK da tabela de clientes-->
                <select class="form-control" name="cliente" required="required">
                <?php
                    echo '<option disabled selected value> ----- </option>';

                    $clientes = $usuario->retornaClientes();
                    foreach($clientes as $key => $value){
                      echo '<option value='.$value['idClientes'].'>'.$value['nome_cliente'].'</option>';
                    }
                  ?>
                  </select>
              </div>
              <div class="form-group">
                <label> Selecione o Projeto</label>
                <select class="form-control" name="projeto" required="required">   
                  <?php
                    echo '<option disabled selected value> ----- </option>';

                  //   $result = mysqli_query($conn, $sql);
                  // // Faz um loop pela tabela e escreve ela na tela
                  //   while($row = mysqli_fetch_array($result)){
                  //     echo '<option value=' . $row['idProjeto'] . '>' . $row['proposta'] . '</option>';
                  //   }
                  ?>
                </select>
              </div>
            <div class="form-group">
              <label for=""> Equipe</label>
              <input name="equipe" type="text" class="form-control" placeholder=" Insira os nomes dos integrantes"  required="required"/>
            </div>
            <div class="form-group">
              <label for="">Data</label>
              <input name="date" type="date" class="form-control" required="required"/>
            </div>

            <div class="form-group">
              <label> Selecione a Infra Estrutura</label>

              <select class="form-control" name="infra-estrutura" required="required">   
                <?php
                  echo '<option disabled selected value> ----- </option>';

                  $infraEstrutura = $usuario->retornaInfraEstrutura();
                  foreach($infraEstrutura as $key => $value){
                  echo '<option value=' . $value['idinfraEstrutura'] . '>' . $value['desc_infraEstrutura'] . '</option>';
                  }
                ?>
              </select>
              
              <div class="form-group">
                <label>Quantidade</label>
                <input name="infra-estrutura-num" type="number" class="form-control" placeholder=" Insira a quantidade produzida" required="required"/>
              </div>
            </div>

            <div class="form-group">
              <label>Selecione o Cabeamento</label>

              <select class="form-control" name="cabeamento" required="required">
                <?php
                  echo '<option disabled selected value> ----- </option>';

                  $cabeamentos = $usuario->retornaCabeamento();
                  foreach($cabeamentos as $key => $value){
                  echo '<option value=' . $value['idCabeamento'] . '>' . $value['desc_cabeamento'] . '</option>';
                  }
                ?>
              </select>

            </div>
              <div class="form-group">
                <label>Quantidade</label>
                <input name="cabeamento-num" type="number" class="form-control" placeholder=" Insira a quantidade produzida" required="required"/>
              </div>

            <div class="form-group">
              <label>Selecione a Conectorização</label>

              <select class="form-control" name="conectorizacao" required="required">
              <?php
                  echo '<option disabled selected value> ----- </option>';

                  $conectores = $usuario->retornaConector();
                  foreach($conectores as $key => $value){
                  echo '<option value=' . $value['idConector'] . '>' . $value['desc_conector'] . '</option>';
                  }
                ?>
              </select>
            </div>
              <div class="form-group">
                <label> Quantidade</label>
                <input name="conectorizacao-num" type="number" class="form-control" placeholder=" Insira a quantidade produzida" required="required"/>
              </div>

            <div class="form-group">
              <label> Tempo de conclusão (minutos)</label>
              <input name="tempo-conclusao" type="number" class="form-control" placeholder=" Insira o tempo" required="required"/>
            </div>
            <div class="form-group">
              <label>Observações (não obrigatório)</label>
              <input name="obs" type="text" class="form-control" placeholder=" Insira as observações" />
            </div>
            <p id="error-msg"></p>
            <div style="text-align: right">
              <button type="submit" name="submit" id="botão" class="btn btn-sm">
                Cadastrar
              </button>
              <button type="button" class="btn btn-info btn-sm" onclick="location.href='<?php echo DIRPAGE?>'">Voltar</button>
            </div>
          </form>

        </div>

      </div>

    </div>

  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<?php 
include_once DIRJS.'darkmode.php';
  include_once DIRJS.'formulario.php';
  
?>