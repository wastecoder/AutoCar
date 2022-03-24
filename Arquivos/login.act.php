<?php
require("conexao.php");

extract($_POST);

$senha = md5($senha);

$busca = mysqli_query($chave,
"SELECT * FROM `tb_usuarios` WHERE `email` = '$email'");

if($busca -> num_rows == 1){
    //echo "<p>E-mail válido</p>";

    $usuario = mysqli_fetch_array($busca);
    if($senha == $usuario['senha']){
        //echo "<p>Senha válida</p>";

        session_start();
        $_SESSION['user'] = $usuario['nome'];
        $_SESSION['logado'] = true;
        $_SESSION['email'] = $usuario['email'];

        header("location:index.php");
    }else{  //Senha inválida
        header("location:login.php");
    }
}else{
    //echo "<p>E-mail inválido</p>";
    header("location:login.php");
}

//header("location:login.php");
?>