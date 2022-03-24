<?php
include('includes/head.php');
include('includes/topo.php');
?>

<body>
    <div class="central-pesquisa">
        <input type="text" placeholder="Pesquisar modelo ou montadora..."
        onkeyup="pesquisar(this.value)">
    </div>
    <div class="central">

    </div>
</body>

<script>
function pesquisar(texto){
    $.ajax ({
        url: "pesquisar.act.php?texto=" + texto,
        success: function (retorno){
            $('.central').html(retorno);
        }
    });
}
//pesquisar('Palio');
</script>