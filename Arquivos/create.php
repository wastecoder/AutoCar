<?php require('PHP/loginVerification.php'); ?>
<?php include('includes/head.php'); ?>

<body>
    <?php include('includes/topo.php'); ?>

    <div class="central-div">
        <form action="create.act.php" method="POST" enctype="multipart/form-data" class="form-central">
            <label for="mont">Montadora</label><input type="text" id="mont" name="montadora" placeholder="Montadora...">

            <label for="model">Modelo</label><input type="text" id="model" name="modelo" placeholder="Modelo...">

            <label for="year">Ano</label><input type="text" id="year" name="ano" placeholder="Ano...">

            <label for="desc">Descrição</label>
            <input type="text" name="descricao" id="desc" placeholder="Descrição...">

            <label for="price">Valor</label><input type="number" id="price" name="preco" placeholder="Preço...">
            
            <label for="photo">Foto </label><input type="file" id="photo" name="foto">

            <p><input type="submit" name="Enviar" id="button1"></p>
        </form>
    </div>
</body>
</html>