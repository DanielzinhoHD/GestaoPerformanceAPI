<div class="container-fluid">

  <hr />

  <div class="row  mb-3 p-2 justify-content-md-center">
    
    <!--Adicionar Projeto -->
    <div class="col-lg-4 col-md-6 mb-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex flex-column align-items-center justify-content-center mb-2">
            <h5 class="card-title">Adicionar Projeto</h5>
            <p class="card-text">Opção para adicionar novos projetos.</p>
          </div>
        </div>
        <div class="card-footer">
          <div  class="d-flex flex-column align-items-center justify-content-center mb-2">
            <a href="<?php echo DIRPAGE.'addprojeto'?>" class="btn btn-info btn-sm">Cadastrar Projeto</a>
          </div>
        </div>
      </div>
    </div>

    <!--Listar Projeto -->
    <div class="col-lg-4 col-md-6 mb-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex flex-column align-items-center justify-content-center mb-2">
            <h5 class="card-title">Listar Projeto</h5>
            <p class="card-text"> Opção para listar, editar e excluir projetos</p>
          </div>
        </div>
        <div class="card-footer">
          <div  class="d-flex flex-column align-items-center justify-content-center mb-2">
            <a href="<?php echo DIRPAGE.'listarProjetos'?>" class="btn btn-info btn-sm">Projetos</a>
          </div>
        </div>
      </div>
    </div>

    <!--Cadastrar Clientes -->
    <div class="col-lg-4 col-md-6 mb-3">
      <div class="card">
        <form method="POST">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center justify-content-center mb-2">
              <h5 class="card-title">Cadastrar Clientes</h5>
              <p class="card-text"> Opção para cadastro de novos clientes</p>
                <input type="text" id="floatingInputUsername" name="cliente" placeholder="Nome do cliente" class="form-control">
                <p id="error-msg"></p>
            </div>
          </div>
          <div class="card-footer">
            <div  class="d-flex flex-column align-items-center justify-content-center mb-2">
              <button type="submit" name="submit" class="btn btn-info btn-sm">Cadastrar clientes</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<?php 
  include_once DIRJS.'darkmode.php';
  include_once DIRJS.'addClientes.php';  
?>
