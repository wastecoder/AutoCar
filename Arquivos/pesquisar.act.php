<?php
require("conexao.php");
$texto = $_GET['texto'];

if($texto != ""){
    $retornoPesquisa = mysqli_query
    ($chave, "SELECT * FROM `tb_carros`
    WHERE `modelo` like '%$texto%' OR `montadora` like '%$texto%' ORDER BY `codigo` limit 0,5");
        
    while($carro = mysqli_fetch_array($retornoPesquisa)){
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
    </div>";
        }
}
?>

