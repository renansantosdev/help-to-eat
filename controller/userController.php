<?php

    define("USERADMIN", array("name" => "admin", "email" => "admin@helptoeat.com", "password" => "admin"));
    define("USER", array("name" => "Renan", "email" => "renan@helptoeat.com", "password" => "123456"));

    require __DIR__ . "\\..\\model\\userModel.php";

    if (isset($_POST["btn-login"])) {

        $email = $_POST["email"];
        $password = $_POST["password"];

        if ($email == USER["email"] && $password == USER["password"]) {
            loginUser(USER["name"], USER["email"], USER["senha"]);
        }

        if ($email == USERADMIN["email"] && $password == USERADMIN["password"]) {
            loginAdmin(USERADMIN["name"], USERADMIN["email"], USERADMIN["senha"]);
        }

        require __DIR__ . "\\..\\view\\login.php";
        // header("location: /../../view/login.php");
    }

    if (isset($_POST["btn-cadastro"])) {
        
        $nome = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        cadastro($nome, $email, $senha);

    }

    if (isset($_GET["btn-logout"])) {

        logout();
        
        header("location: /../../index.php");
    }

    function loginAdmin($nome, $email, $senha){

        $_SESSION["nome"] = $nome;
        $_SESSION["email"] = $email;
        $_SESSION["senha"] = $senha;

        require __DIR__ . "\\..\\view\\admin.php";
        header("location: /../../view/admin.php");
    }

    function loginUser($nome, $email, $senha){

        $_SESSION["nome"] = $nome;
        $_SESSION["email"] = $email;
        $_SESSION["senha"] = $senha;

        require __DIR__ . "\\..\\view\\admin.php";
        header("location: /../../view/adminUser.php");
    }

    function logout(){
        session_unset();
        session_destroy();
    }

    function cadastro($nome, $email, $senha) {

        $userModel = new userModel();

        $userModel->save($nome, $email, $senha);

        header("location: /../../view/login.php");

    }

?>