<div class="container">

  <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    
    <div class="container">

      <div class="row justify-content-center">

        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
          
          <h2 class="title title-second"> Sistema de Gestão Integrado</h2>
          
          <form  class="needs-validation">
          
            <div class="card">

              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Criar uma conta</h5>
                  <p class="text-center small">Use um Email pessoal para registro</p>
                </div>

                <div class="col-12 mb-3">
                  <label for="nome" class="form-label">Nome:</label>
                  <div class="input-group has-validation">
                    <input type="text" placeholder="Nome" name="nome" class="form-control" id="nome" required>
                    <div class="invalid-feedback">Por favor insira seu nome de usuário.</div>
                  </div>
                </div>

                <div class="col-12 mb-3">
                  <label for="email" class="form-label">Email:</label>
                  <div class="input-group has-validation">
                    <input type="text" placeholder="Email" name="email" class="form-control" id="email" required>
                    <div class="invalid-feedback">Por favor insira seu nome de usuário.</div>
                  </div>
                </div>

                <div class="col-12 mb-3">
                  <label for="passowrd" class="form-label">Senha:</label>
                  <input type="password" placeholder="Senha" name="senha" class="form-control" id="password" required>
                  <div class="invalid-feedback">Por favor, insira sua senha!</div>
                </div>

                <div class="col-12 mb-3">
                  <label for="passowrd" class="form-label">Confirmar Senha:</label>
                  <input type="password" placeholder="Confirmar Senha" name="Confirmarsenha" class="form-control" id="password2" required>
                  <div class="invalid-feedback">Por favor, insira sua senha!</div>
                </div>

                <div class="col-12 mb-3">
                  <label for="cep" class="form-label">Digite seu cep:</label>
                  <input type="text" placeholder="Somente números" name="cep" class="form-control" id="cep" required>
                  <div class="invalid-feedback">Por favor, insira seu CEP!</div>
                </div>

                <div class="col-12 mb-3">
                      <button type="button" id="pesquisarCEP" class="btn btn-primary" name="pesquisarCEP">Pesquisar CEP</button>
                </div>

                <div class="col-12 mb-3">
                  <label for="logradouro" class="form-label">Endereço:</label>
                  <input type="text" placeholder="Endereço" name="logradouro" class="form-control" id="logradouro">
                </div>

                <div class="col-12 mb-3">
                  <label for="complemento" class="form-label">Complemento:</label>
                  <input type="text" placeholder="Complemento" name="complemento" class="form-control" id="complemento">
                </div>

                <div class="col-12 mb-3">
                  <label for="bairro" class="form-label">Bairro:</label>
                  <input type="text" placeholder="Bairro" name="bairro" class="form-control" id="bairro">
                </div>

                <div class="col-12 mb-3">
                  <label for="localidade" class="form-label">Município:</label>
                  <input type="text" placeholder="Município" name="localidade" class="form-control" id="localidade">
                </div>

                <div class="col-12 mb-3">
                  <label for="uf" class="form-label">UF:</label>
                  <input type="text" placeholder="UF" name="uf" class="form-control" id="uf">
                </div>

                <div class="col-12 mb-3">
                  <label for="numero" class="form-label">Número:</label>
                  <input type="text" placeholder="Número" name="numero" class="form-control" id="numero">
                </div>

                <p id="error-msg"></p>

                <div class="col-12 mb-3">
                  <button class="btn btn-primary form-control" type="submit" role="button" name="submit" value="Submit">Acesse</button>
                </div>

              </div>
              
            </div>
            
          </form>

          <h2 class="title title-second">Já possui conta?</h2>
          <a class="btn btn-primary" href="<?php echo DIRPAGE.'login'?>" role="button">Entrar</a>

        </div>

      </div>

    </div>

  </section>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<?php 
  include_once DIRJS.'darkmode.php';
  include_once DIRJS.'registrar.php';
  include_once DIRJS.'cepAPI.php';  
?>


