<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/view/css/cadastro.css">
    <link rel="icon" type="imagem/png" href="/view/images/Box.png">
    <title>Cadastro</title>
</head>

<body>


    <div class="container">

        <nav>
            <div class="logo">
                <a href="/index.php"><img src="/view/images/Logo.png"></a>
            </div>
        </nav>


        <div class="form-cadastro">
            <h1>Cadastro</h1>
            <form action="/../controller/userController.php" method="post">
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="name">
                        </div>
                        <div class="col">
                            <label for="data">Data de nascimento</label>
                            <input type="date" class="form-control" id="data">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="sexo">Sexo</label>
                            <select class="form-control" id="sexo">
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminino</option>
                                <option value="outro">Outro</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="civil">Estado civil</label>
                            <select class="form-control" id="civil">
                                <option value="solteiro">Solteiro</option>
                                <option value="casado">Casado</option>
                                <option value="separado">Separado</option>
                                <option value="divorciado">Divorciado</option>
                                <option value="viuvo">Viúvo</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="tel">Telefone</label>
                            <input type="text" class="form-control" id="tel" onkeypress="return somenteNumeros(event)" maxlength="11">
                        </div>
                        <div class="col">
                            <label for="endereco">Endereço</label>
                            <input type="text" class="form-control" id="endereco">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="col">
                            <label for="re-email">Confirme o Email</label>
                            <input type="email" class="form-control" id="re-email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" id="senha" name="password">
                        </div>
                        <div class="col">
                            <label for="re-senha">Confirme a Senha</label>
                            <input type="password" class="form-control" id="re-senha">
                        </div>
                    </div>
                    <div class="text-center">
                        <input id="btn-cadastro" type="submit" name="btn-cadastro" value="Cadastrar">
                    </div>
                </div>
            </form>
        </div>

        <div id="grid-resultado">

            <div id="resultado"></div>

        </div>

    </div>

    <script src="/view/js/cadastro.js"></script>

</body>

</html>