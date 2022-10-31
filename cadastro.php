<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <title>CADASTRO</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./css/style.css" />

    <script src="jquery-3.6.1.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#buscaCEP").click(function() {
                $.post("buscarcep.php", "cep=" + $("#cep").val(), function(data) {
                    if (data != "") {
                        var obj = jQuery.parseJSON(data);
                        $("#cidade").text(obj.localidade);
                    }
                })
            })
        })
    </script>

</head>

<body>
    <section id="last">

        <div class="full">
            <h3>CADASTRO</h3>

            <div class="lt">

                <!-- Inicio do Formulário  -->
                <form class="form-horizontal" method="post" action="conexao.php">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <!-- Nome completo -->
                            <label for="user">Nome completo:</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira seu nome" value="" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <!-- CEP -->
                            <label for="cep">CEP</label>
                            <input type="text" class="form-control" id="cep" name="cep" placeholder="Seu CEP" value="" />
                            <span  id="cidade" style="display:block"></span>
                            <input type="button" value="Procurar" id="buscaCEP" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <!-- Data de Nascimento -->
                            <label for="datanasc">Data Nascimento</label>
                            <input type="date" class="form=control" id="datanasc" name="datanasc" value="" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <!-- Email -->
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="exemple@gmail.com" value="" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <!-- Username -->
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Escolha seu username" value="" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <!-- Senha  -->
                            <label for="senha_login">Senha:</label>
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Insira sua senha" value="" />
                        </div>
                    </div>

                    <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                        <span class="send-text">CADASTRAR</span>
                    </button>

                    <div class="link">
                        Já tem uma conta?
                        <a href="login.php"> Ir para Login </a>
                    </div>

                </form>

            </div>

        </div>
    </section>
</body>

</html>