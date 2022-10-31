<?php
    $local = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "site";
    
    $con = "";

    try{
        $con = new mysqli($local, $usuario, $senha, $database);
    }
    catch(Exception $erro){
        echo "<p>Ocorreu um erro ao conectar no banco de dados </p>";
        die();
}
?>
