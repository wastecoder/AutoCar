<?php
if(!$chave = mysqli_connect("localhost", "root", "")){
    print "<p>Erro na conexão com o banco de dados</p>";
}

if(!mysqli_select_db($chave, "bd_carros")){
    print "<p>Erro ao selecionar base de dados</p>";
}
?>