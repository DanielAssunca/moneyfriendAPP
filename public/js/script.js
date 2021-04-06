$(document).ready(function () {
    $(".navbar-toggle").click(function () {
        $(".menu").toggleClass("menu-open");

    });

    $("#select_cliente").change(function () {
        $("#select_dividas").attr('disabled', false);
        console.log('teste');
        $.ajax({
            url: '/controllers/acompanhamentosController/get-evento/',
           //C:\xampp\htdocs\SysAcomp\app\Http\Controllers\acompanhamentosController.php
            type: 'get',
            dataType: 'JSON',
            success: function (response) {
                alert("danger");
            }
        });

    });


    $("#Conf_FormaPGTO").click(function () {
        $("#Text_FormaPGTO").attr('disabled', true);
        document.getElementById('Text_FormaPGTO').textContent = ("Formas de Pagamento Conferidas!");

    });


    $("#Alter_FormaPGTO").click(function () {
        $("#Text_FormaPGTO").attr('disabled', false);

    });



    $("#Conf_Categoria").click(function () {
        $("#Text_Categoria").attr('disabled', true);
        document.getElementById('Text_Categoria').textContent = ("Categorias Conferidas!");

    });


    $("#Alter_Categoria").click(function () {
        $("#Text_Categoria").attr('disabled', false);

    });


    $("#Conf_PlanoPGTO").click(function () {
        $("#Text_PlanoPGTO").attr('disabled', true);
        document.getElementById('Text_PlanoPGTO').textContent = ("Plano de Pagamento Conferidos!");

    });


    $("#Alter_PlanoPGTO").click(function () {
        $("#Text_PlanoPGTO").attr('disabled', false);

    });


    $("#Conf_ModeloEMAIL").click(function () {
        $("#Text_ModeloEMAIL").attr('disabled', true);
        document.getElementById('Text_ModeloEMAIL').textContent = ("Modelos de E-mail Conferidos!");

    });


    $("#Alter_ModeloEMAIL").click(function () {
        $("#Text_ModeloEMAIL").attr('disabled', false);

    });






});





function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value = ("");
    document.getElementById('bairro').value = ("");
    document.getElementById('cidade').value = ("");
    document.getElementById('uf').value = ("");
    document.getElementById('ibge').value = ("");
}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('rua').value = (conteudo.logradouro);
        document.getElementById('bairro').value = (conteudo.bairro);
        document.getElementById('cidade').value = (conteudo.localidade);
        document.getElementById('uf').value = (conteudo.uf);
        document.getElementById('ibge').value = (conteudo.ibge);
    } //end if.
    else {
        //CEP não Encontrado.
        limpa_formulário_cep();
        alert("CEP não encontrado.");
    }
}

function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('rua').value = "...";
            document.getElementById('bairro').value = "...";
            document.getElementById('cidade').value = "...";
            document.getElementById('uf').value = "...";
            document.getElementById('ibge').value = "...";

            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }

};
