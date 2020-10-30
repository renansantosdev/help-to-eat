<?php

    require __DIR__ . "\\..\\model\\cestaModel.php";

    $cestaModel = new cestaModel();


    if(isset($_POST["btn-edit-cesta"])){

        $tipo = $_POST["tipo"];
        $alimentos = $_POST["alimentos"];
        $higiene = $_POST["higiene"];
        $valor = $_POST["valor"];

        update($tipo, $alimentos, $higiene, $valor);

    }

    if(isset($_POST["btn-delete"])){

        $index = $_POST["index"];

        cestaDelete($index);
    }

    function update($tipo, $alimentos, $higiene, $valor){

        $cestaModel = new cestaModel();

        $cestas = $cestaModel->listAll();

        foreach ($cestas as $value) {
            $i = 0;

            if ($value["tipo"] == $tipo){
                $cestaModel->update($i, $tipo, $alimentos, $higiene, $valor);
                header("location: /../../view/admin.php");
            } else {
                $i++;
            }
        }
    }

    function cestaDelete($index){
        $cestaModel = new cestaModel();

        $cestaModel->delete($index);

        header("location: /../../view/admin.php");
    }
?>