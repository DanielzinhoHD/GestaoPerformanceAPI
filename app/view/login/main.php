<div class="container">

  <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    
    <div class="container">

      <div class="row justify-content-center">

        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
          
          <h2 class="title title-second"> Sistema de Gestão Integrado</h2>
          
          <form  class="form needs-validation">
          
            <div class="card">

              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Faça login na sua conta</h5>
                  <p class="text-center small">Digite seu email e senha para entrar</p>
                </div>

                <div class="col-12 mb-3">
                  <label for="email" class="form-label">Email:</label>
                  <div class="input-group has-validation">
                    <input type="text" name="email" class="form-control" required>
                    <div class="invalid-feedback">Por favor insira seu nome de usuário.</div>
                  </div>
                </div>

                <div class="col-12 mb-3">
                  <label for="passowrd" class="form-label">Senha:</label>
                  <input type="password" name="pw" class="form-control" required>
                  <div class="invalid-feedback">Por favor, insira sua senha!</div>
                </div>

                <p id="error-msg"></p>

                <div class="col-12 mb-3">
                  <button class="btn btn-primary form-control" type="submit" role="button" name="submit" value="Submit">Acesse</button>
                </div>

              </div>
              
            </div>
            
          </form>

          <h2 class="title title-second">Ainda não possui conta ?</h2>
          <a class="btn link" href="<?php echo DIRPAGE.'registro'?>" role="button">Registrar</a>

        </div>

      </div>

    </div>

  </section>

</div>


<?php include_once DIRJS.'login.php';?>
<?php include_once DIRJS.'darkmode.php';?>


