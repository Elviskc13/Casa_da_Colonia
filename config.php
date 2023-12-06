<?php
    $servername = "Localhost";
    $username = "root";
    $password = "";
    $dbname = "casacolonia";

    $conexao = new mysqli($servername, $username, $password, $dbname);

    if ($conexao == false)
        die("Não foi possível conectar com o banco de dados");
?>