<?php
use App\Controller\ControllerListarProjeto;

$listarProjetos = new ControllerListarProjeto();
?>

<div class="container" style="margin-top:40px">
    <h3>Lista de Projetos</h3>
    <br>
    <table class="table">
        <thead>
         <tr>
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
             <tr>
                 <td><button type="button" class="btn btn-info btn-sm" onclick="location.href='<?php echo DIRPAGE.'projetos'?>'">
                        Voltar
                    </button>
                </td>
             </tr>
         </tbody>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
