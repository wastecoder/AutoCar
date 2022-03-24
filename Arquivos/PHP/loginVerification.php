<?php
@session_start();

if(!isset($_SESSION['logado']) || $_SESSION['logado'] != true){
    //echo "<h1>Deslogado</h1>";
    header("location:login.php");
}
?>