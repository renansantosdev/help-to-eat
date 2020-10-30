<?php

    define("USERADMIN", array("index" => 0, "name" => "admin", "email" => "admin@helptoeat.com", "password" => "admin"));
    define("USER", array("index" => 1, "name" => "Renan", "email" => "renan@helptoeat.com", "password" => "123456"));

    require __DIR__ . "\\..\\model\\userModel.php";

    $userModel = new userModel();

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

    if(isset($_POST["btn-edit-user"])){

        $nome = $_POST["name"]; 
        $email = $_POST["email"]; 
        $password = $_POST["password"];

        updateUser($nome, $email, $password);

    }

    if(isset($_POST["btn-delete"])){

        $index = $_POST["index"];

        userDelete($index);
    }

    function loginAdmin($nome, $email, $senha){

        session_start();

        $_SESSION["status"] = 1;
        $_SESSION["nome"] = $nome;
        $_SESSION["email"] = $email;
        $_SESSION["senha"] = $senha;

        header("location: /../../view/admin.php");
    }

    function loginUser($nome, $email, $senha){

        session_start();

        $_SESSION["status"] = 1;
        $_SESSION["nome"] = $nome;
        $_SESSION["email"] = $email;
        $_SESSION["senha"] = $senha;

        require __DIR__ . "\\..\\view\\adminUser.php";
        header("location: /../../view/adminUser.php");
    }

    function cadastro($nome, $email, $senha) {

        $userModel = new userModel();

        $userModel->save($nome, $email, $senha);

        header("location: /../../view/login.php");

    }

    function updateUser($nome, $email, $password){

        $userModel = new userModel();

        $user = $userModel->listAll();

        foreach ($user as $value) {
            $i = 0;

            if ($value["email"] == $email){
                $userModel->update($i, $nome, $email, $password);
                header("location: /../../view/admin.php");
            } else {
                $i++;
            }
        }

        header("location: /../../view/admin.php");
    }

    function userDelete($index){

        $userModel = new userModel();

        $userModel->delete($index);

        header("location: /../../view/admin.php");
    }

?>