<?php
require("conexao.php");

$codigo = $_GET['codigo'];

$busca = mysqli_query($chave, "Select `foto`
from `tb_carros` where `codigo` = '$codigo'");
$carro = mysqli_fetch_array($busca);

if(unlink($carro['foto'])){     //Excluí imagem do banco
    mysqli_query($chave,
    "Delete from `tb_carros` where `codigo` = '$codigo'");
}else{      //Se não tiver imagem
    mysqli_query($chave,
    "Delete from `tb_carros` where `codigo` = '$codigo'");
}
?>