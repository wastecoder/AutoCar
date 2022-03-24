<?php
session_start();

session_destroy();  //Destrói a sessão

header("location:index.php");
?>