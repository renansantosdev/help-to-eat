<?php
require __DIR__ . "\\..\\controller\\adminController.php";
require __DIR__ . "\\..\\controller\\userController.php";

$cesta = $cestaModel->getCesta();
$user = $userModel->listAll();

session_start();

if (isset($_GET["btn-logout"])) {
    session_unset();
    session_destroy();

    header("location: /../../index.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/view/css/admin.css">
    <link rel="icon" type="imagem/png" href="/view/images/Box.png">
    <title>Admin</title>
</head>

<body>

    <?php if ($_SESSION["status"] == 1) { ?>

        <!-- FONT AWESOME -->
        <script defer src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" integrity="sha384-ujbKXb9V3HdK7jcWL6kHL1c+2Lj4MR4Gkjl7UtwpSHg/ClpViddK9TI7yU53frPN" crossorigin="anonymous">
        </script>
        <script src="/view/js/admin.js"></script>

        <div id="modal-admin" class="modal-admin"></div>

        <div class="container">

            <nav>
                <div class="logo">
                    <a href="/index.php"><img src="/view/images/Logo.png"></a>
                </div>
                <form action="" method="get">
                    <input type="submit" id="btn-logout" name="btn-logout" value="Logout">
                </form>
            </nav>

            <div class="grid">
                <h1>Cestas</h1>
                <div class="grid-card">
                    <?php foreach ($cesta as $value) { ?>
                        <div class="card">
                            <div class="desc">
                                <img src="/view/images/Box.png">
                                <h2><?= $value["tipo"] ?></h2>
                            </div>
                            <div class="options">
                                <button onclick="abrirModalCesta('<?= $value['tipo'] ?>', '<?= $value['alimentos'] ?>', '<?= $value['higiene'] ?>', '<?= $value['valor'] ?>')"><i class="fas fa-eye"></i> View</button>
                                <button onclick="abrirModalEditCesta('<?= $value['tipo'] ?>', '<?= $value['alimentos'] ?>', '<?= $value['higiene'] ?>', '<?= $value['valor'] ?>')"><i class="fas fa-edit"></i> Editar</button>
                                <form action="/controller/adminController.php" method="post">
                                    <input type="hidden" name="index" value="<?= $value["tipo"] ?>">
                                    <i class="fas fa-trash"></i>
                                    <input type="submit" name="btn-delete" value="Apagar">
                                </form>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="grid">
                <h1>Usuários</h1>
                <div class="grid-card-user grid-card">
                    <?php foreach ($user as $value) { ?>
                        <div class="card">
                            <div class="desc">
                                <img src="/view/images/renan.png">
                                <h2><?= $value["name"] ?></h2>
                            </div>
                            <div class="options">
                                <button onclick="abrirModalUser('<?= $value['name'] ?>', '<?= $value['email'] ?>', '<?= $value['password'] ?>')"><i class="fas fa-eye"></i> View</button>
                                <button onclick="abrirModalEditUser('<?= $value['name'] ?>', '<?= $value['email'] ?>', '<?= $value['password'] ?>')"><i class="fas fa-edit"></i> Editar</button>
                                <form action="/controller/userController.php" method="post">
                                    <input type="hidden" name="index" value="<?= $value["index"] ?>">
                                    <i class="fas fa-trash"></i>
                                    <input type="submit" name="btn-delete" value="Apagar">
                                </form>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    <?php } else {
        header("location: /../../view/login.php");
    } ?>

</body>

</html>