<?php
require("../conexao.php");

$email = $_GET['email'];    //E-mail passado pelo link

    //Faz a busca do e-mail no banco de dados
$busca = mysqli_query($chave, 
"SELECT `email` FROM `tb_usuarios` WHERE `email` = '$email'");

    //num_rows = retorna a quantidade de linhas no banco de dados.
$quantidadeEmail = $busca -> num_rows;

//echo "<h1>Quantidade = $quantidadeEmail</h1>";

if($quantidadeEmail == 0){
    //Não há e-mail igual
    echo true;
}else{
    //Há e-mail igual
    echo false;
}

//echo $quantidadeEmail;
?>