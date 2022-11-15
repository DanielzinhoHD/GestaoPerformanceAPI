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

        <a href="#" class="switch-dark-mode" type="checkbox" id="switch"> <span class="material-icons">contrast</span> Modo escuro</a>
    
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

            <a href="<?php echo DIRPAGE?>">
              <li class="list-group-item"> 
                <span class="material-icons">description</span>
                DASHBOARD 
              </li>
            </a>

            <a href="<?php echo DIRPAGE.'graficos'?>">
              <li class="list-group-item"> 
                <span class="material-icons">grid_view</span>
                GRÁFICOS
              </li>
            </a>

            <a href="<?php echo DIRPAGE.'formulario'?>">
              <li class="list-group-item"> 
                <span class="material-icons">description</span>
                FORMULÁRIOS 
              </li>
            </a>

            <a href="<?php echo DIRPAGE.'relatorios'?>">
              <li class="list-group-item"> 
                <span class="material-icons">grid_view</span>
                RELATÓRIOS
              </li>
            </a>

            <a href="<?php echo DIRPAGE.'projetos'?>">
              <li class="list-group-item"> 
                <span class="material-icons">description</span>
                PROJETOS 
              </li>
            </a>
            
          </ul>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Fechar Menu</button>
          <?php
            if(isset($_SESSION['id'])){
          ?>
            <a href="<?php echo DIRPAGE.'logout/'?>" role="button" class="btn btn-second">Deslogar</a>
          <?php  
            }else{
          ?>
            <a href="<?php echo DIRPAGE.'login/'?>" role="button" class="btn btn-second">Login</a>
            <a href="<?php echo DIRPAGE.'registro/'?>" role="button" class="btn btn-second">Registrar</a>
          <?php  
            }
          ?>
         
        </div>
      </div>
    </div>
  </div>