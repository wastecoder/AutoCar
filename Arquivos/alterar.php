<?php require('PHP/loginVerification.php'); ?>
<?php include('includes/head.php'); ?>

<body>
    <?php include('includes/topo.php'); ?>

    <?php
    $cod = $_GET['codigo'];

    include('conexao.php');
    $busca = mysqli_query($chave,
    "Select * from `tb_carros` where `codigo` =  '$cod'");
    $veiculo = mysqli_fetch_array($busca);
    $foto_atual = $veiculo['foto'];
    ?>

    <div class="central-div">
        <form action="alterar.act.php" method="POST" enctype="multipart/form-data">

            <input type="hidden" value="<?php echo $veiculo['codigo']; ?>" name="cod">
            <input type="hidden" value="<?php echo $foto_atual; ?>" name="foto_atual">

            <div class="form-central">
                <label for="mont">Montadora</label>
                <input type="text" id="mont" name="montadora" placeholder="Montadora..." value="<?php echo $veiculo['montadora'] ?>">
            </div>

            <div class="form-central">
                <label for="model">Modelo</label>
                <input type="text" id="model" name="modelo" placeholder="Modelo..." value="<?php echo $veiculo['modelo'] ?>">
            </div>

            <div class="form-central">
                <label for="year">Ano</label>
                <input type="text" id="year" name="ano" placeholder="Ano..." value="<?php echo $veiculo['ano'] ?>">
            </div>

            <div class="form-central">
                <label for="desc">Descrição</label>
                <input type="text" name="descricao" id="desc" placeholder="Descrição..." value="<?php echo $veiculo['descricao'] ?>">
            </div>

            <div class="form-central">
                <label for="price">Valor</label>
                <input type="number" id="price" name="preco" placeholder="Preço..." value="<?php echo $veiculo['preco'] ?>">
            </div>
            
            <div class="form-central">
                <label for="photo">Foto</label>
                <input type="file" id="photo" name="foto">
            </div>

            <p><input type="submit" name="Alterar" value="Alterar" id="button1"></p>
        </form>
    </div>
</body>
</html>