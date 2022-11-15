<?php
use App\Controller\ControllerListarProjeto;

$listarProjetos = new ControllerListarProjeto();
?>

<div class="container-fluid">

  <hr />

  <div class="row  mb-3 p-2 justify-content-md-center">
    
    <!--Adicionar Projeto -->
    <div class="col-lg-6 col-md-6 mb-3">
      
      <div class="card">

        <div class="card-header">
          <hi class="card-title">Lista de Projetos</hi>
        </div>
        
        <div class="card-body table-responsive">

            <table class="table table-sm table-striped table-hover align-middle">
        
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Proposta</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Data Inicio</th>
                        <th scope="col">Data Fim</th>
                    </tr>
                <?php
                    $projetos = $listarProjetos->retornaProjetos();

                    foreach($projetos as $key => $value){
                    ?>    
                        <tr>
                            <td><?php echo $value['idProjeto']?></td>
                            <td><?php echo $value['proposta']?></td>
                            <td><?php echo $value['nome_cliente']?></td>
                            <td><?php echo $value['data_inicio']?></td>
                            <td><?php echo $value['data_termino']?></td>
                        </tr>
                    <?php
                    }
                    ?>

                </thead>

                <tbody>
                </tbody>

            </table>

        </div>

        <div class="card-footer">
            <button type="button" class="btn btn-info" onclick="location.href='<?php echo DIRPAGE.'projetos'?>'">Voltar</button>
        </div>

      </div>

    </div>

  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
