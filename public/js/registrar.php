<script>
    const DIRPAGE='<?php echo DIRPAGE ?>';
    
    $('form').submit((e)=>{
        e.preventDefault();

        const name = $('input[name="nome"]').val();
        
        const email = $('input[name="email"]').val();
        
        const pw = $('input[name="senha"]').val();
        
        const pw2 = $('input[name="Confirmarsenha"]').val();

        const cep = $('input[name="cep"]').val();

        const logradouro = $('input[name="logradouro"]').val();

        const complemento = $('input[name="complemento"]').val();

        const bairro = $('input[name="bairro"]').val();

        const localidade = $('input[name="localidade"]').val();

        const uf = $('input[name="uf"]').val();

        const numero = $('input[name="numero"]').val();

        $.post(DIRPAGE+'registro/Cadastrar',{
           nome:name,
           email:email,
           senha:pw,
           Confirmarsenha:pw2,
           cep:cep,
           logradouro:logradouro,
           complemento:complemento,
           bairro:bairro,
           localidade:localidade,
           uf:uf,
           numero:numero,
           submit:true
        }).done((erro)=>{
            if(!erro){
                location.href=DIRPAGE;
            }
            const span = $('#error-msg');
            span.html(erro);
        });
    })

</script>