<?php

    $servidor="localhost";
    $usuario="root";
    $senha="";
    $dbname="cadastro_loja_informatica";

    $connect=mysqli_connect($servidor, $usuario, $senha, $dbname);
    if (!$connect) {
        die("Ouve um erro, lamentamos pelo incoveniente :(");
    }

?>