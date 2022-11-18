        <script>
            $("#pesquisarCEP").on("click", function(){

                var cep = $("#cep").val().replace(/[^0-9]/g,'');

                if(cep !== "" && cep.length == 8){

                    $.ajax({
                        url: "https://viacep.com.br/ws/"+cep+"/json/",
                        type: "GET",
                        dataType: "json",
                        success: function (data) {

                            if(data.erro !== undefined){
                                alert("CEP inválido ou não encontrado");
                            }else{
                                $("#logradouro").val(data.logradouro);
                                $("#bairro").val(data.bairro);
                                $("#localidade").val(data.localidade);
                                $("#uf").val(data.uf);
                            }
                        },
                        error: function(data){
                            alert("Algum erro ocorreu, consulte o log.");
                        },
                    });

                }else{
                    alert("CEP deve conter 8 digitos");
                }
            });
        </script>