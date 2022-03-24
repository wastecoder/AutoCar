<head>
    <title>Entrar</title>
</head>
<?php include('includes/head.php'); ?>

<body>
    <?php include('includes/topo.php'); ?>

    <div class="central-div">
        <form action="login.act.php" method="POST" enctype="multipart/form-data">
            <div class="form-central">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="E-mail...">
            </div>

            <div class="form-central">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Senha...">
            </div>

            <p><input type="submit" name="Entrar" id="button1"></p>
        </form>
    </div>
</body>
</html>