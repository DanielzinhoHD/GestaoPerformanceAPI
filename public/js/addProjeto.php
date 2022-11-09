<script>
const DIRPAGE = "<?php echo DIRPAGE?>"

const form = $("form");

form.submit((e)=>{
  e.preventDefault();

  const clientId = $("select[name='cliente']").val();
  const proposta = $("input[name='proposta']").val();
  const dataInicio = $("input[name='data-inicio']").val();
  const dataFim = $("input[name='data-fim']").val();
  

  $.post(DIRPAGE + 'addprojeto/salvarProjeto', {
    submit: true,
    clientId: clientId,
    proposta: proposta,
    dataInicio: dataInicio,
    dataFim: dataFim
  }).done((error) => {
    if(!error){
      location.reload();
    }else{
      const p = $("#error-msg");
      p.html(error);
    }
  })
})
</script>