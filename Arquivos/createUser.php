<head>
    <title>Cadastro</title>
</head>
<?php include('includes/head.php'); ?>

<body>
    <?php include('includes/topo.php'); ?>

    <div class="central-div">
        <form action="createUser.act.php" method="POST" enctype="multipart/form-data"
        onsubmit="return compararSenha(senha.value, senha2.value, email.value);">
            <div class="form-central">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Nome...">
            </div>

            <div class="form-central">
                <label for="email">Endereço de e-mail</label>
                <input type="email" id="email" name="email" placeholder="E-mail...">
            </div>

            <div class="form-central">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Senha...">
            </div>

            <div class="form-central">
                <label for="senha2">Confirmar senha</label>
                <input type="password" id="senha2" name="senha2" 
                placeholder="Digite sua senha novamente...">
            </div>
            
            <div class="form-central">
                <label for="photo">Foto </label>
                <input type="file" id="photo" name="foto">
            </div>

            <p><input type="submit" name="Enviar" id="button1"></p>
        </form>
    </div>

</body>
</html>