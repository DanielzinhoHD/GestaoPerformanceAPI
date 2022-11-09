</div>

  <div class="container">
    <div class="content first-content">
        <div class="first-column">
            <h2 class="title title-primary">Bem-vindo de volta</h2>
            <p class="description description-primary"> Para se conectar</p>
            <p class="description description-primary"> Por favor inserir seus dados pessoais</p>
            <a class="btn btn-primary" href="<?php echo DIRPAGE.'login'?>" role="button"> Logar</a>
        </div>
        <div class="second-column">
         
          <h2 class="title title-second"> Criar uma conta</h2>
          <p class="description"> Uso do Email pessoal para registro</p>
          
          <form class="form">
            <input type="text" placeholder="Nome" name="nome">
            <input type="email" placeholder="Email" name="email">
            <input type="password" placeholder="Senha" name="senha">
            <input type="password" placeholder="Confirmar Senha" name="Confirmarsenha">
            <p id="error-msg"></p>
            <button class="btn btn-second" type="submit"> Cadastrar</button>
         </form>
        
         <label class= "dark-mode" for="switch">
         
          <input type="checkbox" id="switch" > Dark mode
     
        </label>
        <span class="material-icons"> contrast</span>
      </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<?php 
  include_once DIRJS.'darkmode.php';
  include_once DIRJS.'registrar.php';  
?>


