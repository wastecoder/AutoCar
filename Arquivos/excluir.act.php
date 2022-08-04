<?php
require("conexao.php");
@session_start();

$codigo = $_GET['codigo'];

$busca = mysqli_query($chave, "Select `foto`
from `tb_carros` where `codigo` = '$codigo'");
$carro = mysqli_fetch_array($busca);

if(!isset($_SESSION['logado']) || $_SESSION['logado'] != true){
    header("location:login.php"); // BUG: está enviando para o index, em vez de login
}else if(unlink($carro['foto'])){     //Excluí imagem do banco
    mysqli_query($chave,
    "Delete from `tb_carros` where `codigo` = '$codigo'");
}else{      //Se não tiver imagem
    mysqli_query($chave,
    "Delete from `tb_carros` where `codigo` = '$codigo'");
}
?>