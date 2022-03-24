<?php include('includes/head.php'); ?>

<script>
    function excluir(codigo){
        opcao = confirm("Deseja excluir o registro " + codigo +"?");
        if(opcao){
            $.ajax ({
                type: "get",
                url: "excluir.act.php?codigo="+codigo,
                success: function (response){
                    window.location = "index.php";
                }
            });
        }
    }
</script>

<body>
    <?php include('includes/topo.php'); ?>

    <div class="central">
        <?php
        require("conexao.php");
        $retornoCarros = mysqli_query
        ($chave, "SELECT * FROM `tb_carros` ORDER BY `codigo`");
        
        while($carro = mysqli_fetch_array($retornoCarros)){
        echo "
        <div>
            <h1>$carro[modelo]</h1>
            <div class='car-img'>
                <img src=$carro[foto]>
            </div>
            <h2>$carro[montadora]</h2>
            <h2>$carro[ano]</h2>
            <h2>$carro[descricao]</h2>
            <h3>R$ " . number_format($carro['preco'], 0, ",", ".") . "</h3>
            <h2>
            <a href=alterar?codigo=$carro[codigo]>Alterar</a>
            <a href=javascript:excluir($carro[codigo])>Excluir</a>
            </h2>
        </div>";
        }
        ?>
    </div>
</body>
</html>