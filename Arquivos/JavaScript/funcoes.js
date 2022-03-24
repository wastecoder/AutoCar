function compararSenha(senha1, senha2, email) {
    /*console.log("1) Senha 1 = " + senha1);
    console.log("2) Senha 2 = " + senha2);
    console.log("3) Email = " + email);*/

    retornoEmailBoolean = validarEmail(email);

    if (senha1 == senha2 && retornoEmailBoolean) {
        //console.log("5) Senhas iguais, e-mail diferente.");
        return true;
    } else {
        //console.log("5) Senhas ou e-mail diferentes.");
        return false;
    }
}

function validarEmail(emailP) {
    $.ajax({
        type: "GET",
        url: "autocar/../PHP/emailValidation.php",
        async: false,
        data: "email=" + emailP,
        success: function(response) { //Retorna String vazia ou 1
            retornoEmailBoolean = (response != '');
            //console.log("4) " + typeof(retornoEmailBoolean));
            //console.log("4) " + retornoEmailBoolean);
        }
    });

    return retornoEmailBoolean;
}

function confirmExit() {
    opcao = confirm("Deseja deslogar?");
    if (opcao) {
        window.location = 'logout.php';
    }
}