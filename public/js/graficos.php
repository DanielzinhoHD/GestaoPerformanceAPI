<script>

const DIRPAGE = "<?php echo DIRPAGE?>"

const clientSelect = $("select[name='cliente']");

clientSelect.on('change', () => {

  const clientId = clientSelect.val();
  // console.log(clientId);

  $.post(DIRPAGE + "graficos/retornaProjeto", {
      clientId: clientId,
      change: true
  }).done((project) => {
      // console.log(JSON.parse(project));
      project = JSON.parse(project);
      const projectSelect = $("select[name='projeto']");

      const nullSelection = $('<option>', {
        disabled: true,
        selected: true,
        text: '-----'
      })
      
      projectSelect.html(nullSelection);

      project.forEach((value, index)=>{
        projectSelect.append($('<option>', {
          text: `${value.proposta}`,
          value: `${value.idProjeto}`
        }))
      })

  })
});

//parametros para escolher o tipo de grafico
$(".form-graficos").submit((event) => {
  event.preventDefault();

  const projeto = $('input[name="projeto"]').val();
  const data_inicial = $('input[name="data_inicial"]').val();
  const data_final = $('input[name="data_final"]').val();
  const submit = $('button[name="submit"]').val();

// Ajax post com a rota "login" e método "login";
  $.post(DIRPAGE + "graficos/generateReport", {
      projeto: projeto,
      data_inicial: data_inicial,
      data_final: data_final,
      submit: submit
  }).done((error) => {
      if(!error){
        location.href = DIRPAGE;
      }
      // console.log(error);
      const span = $("#error-msg");
      span.html(error);
  })
});

</script>