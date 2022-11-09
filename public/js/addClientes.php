<script>

const DIRPAGE = "<?php echo DIRPAGE?>"

const form = $("form");

form.submit((e)=>{
  e.preventDefault();

  const clientName = $("input[name='cliente']").val();

  $.post(DIRPAGE + 'addcliente/addCliente', {
    submit: true,
    cliente: clientName
  }).done((error) => {
    const p = $("#error-msg");
    
    if(!error){
      p.html("Cliente cadastrado com sucesso!");
    }else{
      p.html(error);
    }
  })
})

</script>