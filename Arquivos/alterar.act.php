<?php

include('conexao.php');

extract($_POST);
extract($_FILES);
//var_dump($cod);
//echo $foto_atual;

$foto_gravar = "";
if($foto['tmp_name'] != ""){
    //print "<p>Escolheu foto</p>";
    if($foto_atual == ""){
        $foto_gravar = "fotos_carros/" . md5(time()) . ".jpg";
    }else {
        $foto_gravar = $foto_atual;
    }
    move_uploaded_file($foto['tmp_name'], $foto_gravar);
}else {
    //print "<p>Não escolheu foto</p>";
    $foto_gravar = $foto_atual;
}

if(mysqli_query($chave, "UPDATE `tb_carros` SET 
`montadora` = '$montadora',
`modelo` = '$modelo',
`ano` = '$ano',
`descricao` = '$descricao', 
`foto` = '$foto_gravar',
`preco` = '$preco'
WHERE `tb_carros`.`codigo` = '$cod';")){
    //print "<p>Registro alterado</p>";
    header("location:index.php");
}
?>