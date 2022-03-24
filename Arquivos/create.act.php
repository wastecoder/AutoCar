<?php
require("conexao.php");

extract($_POST);
//var_dump($_POST);
//print $montadora;


extract($_FILES);
$destino = "fotos_carros/" . md5(time()) . ".jpg";
move_uploaded_file($foto['tmp_name'], $destino);


mysqli_query($chave, "INSERT INTO `tb_carros` 
(`codigo`, `montadora`, `modelo`, `ano`, `descricao`, `foto`, `preco`)
VALUES (NULL, '$montadora', '$modelo', '$ano', '$descricao', '$destino', '$preco');");

header("location:index.php");
?>