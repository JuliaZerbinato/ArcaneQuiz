<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
    <section id="last">

        <div class="full">
            <h3>LOGIN</h3>

            <div class="lt">

                <!-- Inicio do Formulário  -->
                <form class="form-horizontal" method="post" action="contact.php">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <!-- Usuario -->
                            <label for="user">Nome de Usuário:</label>
                            <input type="text" class="form-control" id="email_login" name="email_login" placeholder="Insira seu nome de usuário" value="" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <!-- Senha  -->
                            <label for="senha_login">Senha:</label>
                            <input type="password" class="form-control" id="senha_login" name="senha_login" placeholder="Insira sua senha" value="" />
                        </div>
                    </div>

                    <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                        <span class="send-text">LOGAR</span>
                    </button>

                    <div class="link">
                        Ainda não tem conta?
                        <a href="cadastro.php">Cadastre-se</a>
                    </div>
                </form>
            </div>

        </div>
    </section>
</body>

</html>