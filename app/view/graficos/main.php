<nav class="navbar navbar-light bg-light shadow">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">
        SMARTFAST
      <?php 
        if(isset($_SESSION['id'])){
          echo ' - '.ucfirst($_SESSION['name']);
        } 
      ?>
      </span>
      <label class= "dark-mode" for="switch">
         
        <input type="checkbox" id="switch" > Modo escuro
   
    
      </label>
  
      <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <div class="modal true" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
      
          <h5 class="modal-title" id="exampleModalLabel">MENU</h5>
          
         
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        

        <div class="modal-body">

          <ul class="list-group list-group-flush">
            <li class="list-group-item"> <span class="material-icons">
                grid_view </span>DASHBOARD</li>

            <li class="list-group-item"> <span class="material-icons">
                description
              </span>FORMULÁRIOS </li>
            <li class="list-group-item"> <span class="material-icons">
                grid_view </span> RELATÓRIOS</li>
            <li class="list-group-item"> <span class="material-icons">
                description
              </span>´PROJETOS </li>
            
          </ul>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Fechar Menu</button>
          <a href="<?php echo DIRPAGE.'logout/'?>" role="button" class="btn btn-second"> Deslogar</a>
         
        </div>
      </div>
    </div>
  </div>
  <div class="container text-center">
  

<div class="container" id="tamanhoContainer">
    <form id="form-graficos" method="POST">
        <div class="form-group">
          <label> Selecione o tipo de Gráfico</label>
          <select class="form-control" name="projeto" required="required">
            <option value ="">----</option>
            <option> Tempo Médio por Tipo de Infraestrutura</option>
            <option> Tempo Médio por Projeto</option>
            <option> Total Instalado por Projeto</option>
            <option> Instalado do Projeto por Dia</option>
          </select>
        </div>
        
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
        <label for="">Data Inicial</label>
        <input name="data_inicial" type="date" class="form-control" required="required"/>
      </div>
      <div class="form-group">
        <label for="">Data Final</label>
        <input name="data_final" type="date" class="form-control" required="required"/>
      </div>
      <div style="text-align: right">
        <button type="submit" name="submit" id="botão" class="btn btn-sm">
          Gerar
        </button>
        <button type="button" class="btn btn-info btn-sm" onclick="location.href='<?php echo DIRPAGE?>'">Voltar</button>
      </div>
    </form>
  </div>

  </div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<?php
include_once DIRJS.'graficos.php';
