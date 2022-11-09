<script>

const DIRPAGE = "<?php echo DIRPAGE?>"

//parametros para escolher o tipo de relatorio
$(".form-relatorios").submit((event) => {
  event.preventDefault();

  const projeto = $('input[name="projeto"]').val();
  const data_inicial = $('input[name="data_inicial"]').val();
  const data_final = $('input[name="data_final"]').val();
  const submit = $('button[name="submit"]').val();

// Ajax post com a rota "login" e método "login";
  $.post(DIRPAGE + "relatorios/generateReport", {
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