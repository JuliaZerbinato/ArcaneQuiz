<?php
session_start();
    //conectar no banco de dados
    include("conexao.php");
    //obter os dados do formulário
    $login = "";
    $senha = "";
    
    if(isset($_POST["username"])){
        $login = addslashes(trim($_POST["username"]));
    }
    if(isset($_POST["senha"])){
        $senha = md5(trim($_POST["senha"]));
    }
    
    //validar o usuário no BD
    $sql = "SELECT * FROM username WHERE username='$login' AND senha='$senha'";
    $result = $con->query($sql);
    $qtd_user = $result->num_rows;

    if($qtd_user == 1){
        $dados = $result->fetch_assoc();
        //salva os dados na sessão
        $_SESSION["username"] = $dados["username"];
        $_SESSION["senha"] = $dados["senha"];
        //redirecionar para a página restrita
        header("Location: quiz.php");
        exit;
    }
    else{
    echo "<p>Usuário não encontrado</p>";
    echo "<a href=\"login.php\">Voltar</a>";
    }
    ?>