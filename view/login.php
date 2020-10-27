<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="icon" type="imagem/png" href="/view/images/Box.png">
    <link rel="stylesheet" href="/view/css/login.css">
    <title>Login</title>
</head>

<body>

        <nav>
            <div class="logo">
                <a href="/index.php"><img src="/view/images/Logo.png"></a>
            </div>
        </nav>

        <div class="grid-login">
            <div class="login">
                <h1>Login</h1>
                <form action="/controller/userController.php" method="post">
                    <div class="col">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email">
                        <label for="password">Senha</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="text-center">
                        <input id="btn-login" type="submit" name="btn-login" value="Entrar">
                    </div>
                </form>
            </div>
            <img src="/view/images/HomePage.png" id="img-login">
        </div>

</body>

</html>