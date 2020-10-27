<?php
require __DIR__ . "\\..\\controller\\adminController.php";

$cesta = $cestaModel->getCesta();
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

    <!-- FONT AWESOME -->
    <script defer src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" integrity="sha384-ujbKXb9V3HdK7jcWL6kHL1c+2Lj4MR4Gkjl7UtwpSHg/ClpViddK9TI7yU53frPN" crossorigin="anonymous">
    </script>
    <script src="/view/js/admin.js"></script>

    <div class="modal-cesta">
        <div class="grid-modal">

            <p>modasfadfsddal</p>
        </div>
    </div>

    <div class="container">



        <nav>
            <div class="logo">
                <a href=""><img src="/view/images/Logo.png"></a>
            </div>
            <form action="/controller/userController.php" method="get">
                <input type="submit" id="btn-logout" name="btn-logout" value="Logout">
            </form>
        </nav>

        <div class="cesta">
            <h1>Cestas</h1>
            <div class="grid-cestas">
                <?php foreach ($cesta as $value) { ?>
                    <div class="card">
                        <div class="desc">
                            <img src="/view/images/Box.png">
                            <h2><?= $value["tipo"] ?></h2>
                        </div>
                        <div class="options">
                            <button onclick="teste()"><i class="fas fa-eye"></i> View</button>
                            <button><i class="fas fa-edit"></i> Editar</button>
                            <form action="">
                                <input type="hidden" name="index" value="<?= $value["tipo"] ?>">
                                <i class="fas fa-trash"></i>
                                <input type="submit" name="btn-delete" value="Apagar">
                            </form>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>



    </div>

</body>

</html>