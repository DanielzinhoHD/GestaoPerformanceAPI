<div class="container-projeto" style="margin-top:100px">
  <div class="row">

    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"> Adicionar Projeto</h5>
          <p class="card-text"> Opção para adicionar novos projetos</p>
          <a href="<?php echo DIRPAGE.'addprojeto'?>" class="btn btn-info"> Cadastrar Projeto</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"> Listar Projeto</h5>
          <p class="card-text"> Opção para listar, editar e excluir projetos</p>
          <a href="<?php echo DIRPAGE.'listarProjetos'?>" class="btn btn-info"> Projetos</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Cadastrar Clientes</h5>
          <p class="card-text"> Opção para cadastro de novos clientes</p>
          <form method="POST">
            <button type="submit" name="submit" class="btn btn-info">Cadastrar clientes</button>
            <p id="error-msg"></p>
            <input type="text" id="floatingInputUsername" name="cliente" placeholder="Nome do cliente" class="form-control">
          </form>
        </div>
      </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<?php include_once DIRJS.'addClientes.php'?>