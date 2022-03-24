<?php
require("conexao.php");

extract($_POST);

extract($_FILES);
$destino = "fotos_usuarios/" . md5(time()) . ".jpg";
move_uploaded_file($foto['tmp_name'], $destino);

$senha = md5($senha);

mysqli_query($chave, "INSERT INTO `tb_usuarios`
(`codigo`, `nome`, `email`, `senha`, `foto`) VALUES
(NULL, '$nome', '$email', '$senha', '$destino');");

/*if(mysqli_query($chave, "INSERT INTO `tb_usuarios`
(`codigo`, `nome`, `email`, `senha`, `foto`) VALUES
(NULL, '$nome', '$email', '$senha', '$destino');")){
    echo "<p>Gravou</p>";
}else{
    echo "<p>Não gravou</p>";
}*/

header("location:index.php");
?>