<?php
    $hostname_db = "localhost"; //variavel de onde esta o banco de dados 
    $username_db = "root";  //variavel pega o nome do usuario do banco de dados
    $password_db = "";     //variavel  pega a senha do usuario 
    $database_db = "bd_aula"; //variavel que pega o nome do banco de dados


    $dbconn = mysqli_connect($hostname_db,$username_db,
    $password_db,$database_db) or die 
    ("erro na conexao");
    mysqli_select_db($dbconn,$database_db); // funcao que seleciona o banco e a conexao
?>