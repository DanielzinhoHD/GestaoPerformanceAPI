<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> FORMULARIO</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
  <link href="./style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
  <nav class="navbar navbar-light bg-light shadow">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">SMARTFAST</span>
      <label class= "dark-mode" for="switch">
         
        <input type="checkbox" id="switch" > Dark mode
   
    
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
      
          <h5 class="modal-title" id="exampleModalLabel"> SISTEMA</h5>
          
         
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
          <a href="login.html" role="button" class="btn btn-second"> Deslogar</a>
         
        </div>
      </div>
    </div>
  </div>

  <div >
    <h4 class="card-title"> FORMULÁRIO</h4>
    </div>
  <div class="container2" >
 
    <label">Cliente e Projetos</label>
<input class="form-control" type="text" placeholder=" Nome do cliente" aria-label="default input example">

<label"> Equipe</label>
<input class="form-control" type="text" placeholder=" Nome dos integrantes" aria-label="default input example">

    <label"> Data</label>


      <input type="date" class="form-control" id="" placeholder="">

      <div class="form-group">
        <label> Selecione a Infra Estrutura</label>
        <select class="form-control">
          <option>
            Infra eletroduto fixado em parede, teto ou estrutura metalica com
            escada
            
          </option>
          <option>
            Infra eletroduto fixado em parede, teto ou estrutura metalica com
            Plataforma
          </option>
          <option>Infra eletroduto suspensa (grampo C) com escada</option>
          <option>Infra eletroduto suspensa (grampo C) com plataforma</option>
          <option>
            Infra eletroduto suspensa (outros suportes) com escada
          </option>
          <option>
            Infra eletroduto suspensa (outros suportes) com plataforma
          </option>
          <option>
            Infra Eletrocalha ou perfilado fixado com suporte em parede com
            escada
          </option>
          <option>
            Infra Eletrocalha ou perfilado suspensa (grampo C) com escada
          </option>
          <option>
            Infra Eletrocalha ou perfilado suspensa (grampo C) com plataforma
          </option>
          <option>
            Infra Eletrocalha ou perfilado suspensa (grampo C) com plataforma
          </option>
          <option>
            Infra Eletrocalha ou perfilado suspensa (grampo C) com plataforma
          </option>
        </select>
      </div>

      <label"> Quantidade</label>
<input class="form-control" type="number" placeholder=" 0" aria-label="default input example">

      <div class="form-group">
        <label>Selecione tipo de Cabeamento</label>
        <select class="form-control">
          <option>Cabo de rede em Eletroduto / canaletas com escada</option>
          <option>
            Cabo de rede em Eletroduto / canaletas com plataforma
          </option>
          <option>Cabo de rede em Eletroduto / canaletas Subterrâneo</option>
          <option>
            Fibra / Cabo telefônico em eletrocalha e perfilado com escada
          </option>
          <option>
            Fibra / Cabo telefônico em eletrocalha e perfilado com plataforma
          </option>
          <option>Cabo eletrico em Eletroduto / canaletas com escada</option>
          <option>
            Cabo eletrico em Eletroduto / canaletas com plataforma
          </option>
          <option>Cabo eletrico em Eletroduto / canaletas Subterrâneo</option>
          <option></option>
          <option></option>
          <option></option>
        </select>
      </div>
      <button type="submit" class="btn btn-outline-success btn-sm">
        ENVIAR
      </button>
      <div class="card-footer">
        <span class="material-icons">
          fact_check </span> 
      </div>
     
   
    </form>
  </div>
</div>
</div>
</div>


  <script type="text/javascript" src="index.js"></script>

</body>
</html>