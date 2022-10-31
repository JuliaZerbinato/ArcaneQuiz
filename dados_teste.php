<!DOCTYPE html>
 <html lang="pt-br">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title></title>
 </head>
 <body>
     <h1> Dados Recebidos do Cadastro</h1>
     
<?php
 $local_bd = "localhost";
 $usuario_bd = "root";
 $senh_bd = "";
 $database = "site";
 
 $con = new mysqli($local, $usuario_bd, $senha_bd, $database);
 
 if($con->connect_errno){
 
     echo "<p> Ocorreu um erro: " . $connect->errno . "<p>";
     echo "<p> Mensagem: " . $con->error . "<p>";
 
 
     }else{
     echo "<p> Conectado no BD com sucesso! </p>";
     }
 
   
     $nomecompleto = $_POST["nome"];
     $username = $_POST["username"];
     @$email = $_POST["email"];
     $senha = $_POST["senha"];
     $cep = $_POST["cep"];
     $datnasc = date("Y/m/d");
     $cidade = $_POST["cidade"];
 
     
 
     $sql = "insert into cadastro values(null, '$nomecompleto', '$cep', '$cidade', '$username', '$email', '$senha', '$datanasc')";
 
     echo $sql;
     
     $result=$con->query($sql);
     if($con->errno){
 
         echo "<p> Ocorreu um erro " . $con->connect_errno . "<p>";
         echo "<p> Mensagem: " . $connect_error . "<p>";
 
     }else{
         echo "<p> Cadastrado com Sucesso <p>";
     }
 
?>
 </body>
 </html>
