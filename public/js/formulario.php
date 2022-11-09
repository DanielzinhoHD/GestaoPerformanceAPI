<script>

const DIRPAGE = "<?php echo DIRPAGE?>"

const clientSelect = $("select[name='cliente']");

// Muda o dropdown de projetos dependendo do cliente selecionado;
clientSelect.on('change', () => {

  const clientId = clientSelect.val();
  // console.log(clientId);

  $.post(DIRPAGE + "formulario/retornaProjeto", {
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

// Submete o formulário;
const form = $("form");
// console.log(submitBtn)

form.submit((e)=>{
  e.preventDefault();

  const clientId = $("select[name='cliente']").val();
  const projeto = $("select[name='projeto']").val();
  const equipe = $("input[name='equipe']").val();
  const date = $("input[name='date']").val();
  const infEstr = $("select[name='infra-estrutura']").val();
  const infEstrNum = $("input[name='infra-estrutura-num']").val();
  const cabeamento = $("select[name='cabeamento']").val();
  const cabeamentoNum = $("input[name='cabeamento-num']").val();
  const conect = $("select[name='conectorizacao']").val();
  const conectNum = $("input[name='conectorizacao-num']").val();
  const tempoConclusao = $("input[name='tempo-conclusao']").val();
  const obs = $("input[name='obs']").val();

  $.post(DIRPAGE + 'formulario/salvarFormulario', {
    change: true,
    clientId: clientId,
    equipe: equipe,
    date: date,
    infra_estrutura: infEstr,
    infra_estrutura_num: infEstrNum,
    cabeamento: cabeamento,
    cabeamento_num: cabeamentoNum,
    conectorizacao: conect,
    conectorizacao_num: conectNum,
    tempo_conclusao: tempoConclusao,
    projeto: projeto,
    obs: obs
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