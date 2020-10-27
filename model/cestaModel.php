<?php

    class cestaModel {

        public $cesta = array(
            array("tipo" => "Size", "alimentos" => 15, "higiene" => 5, "valor" => "50,00"),
            array("tipo" => "Plus", "alimentos" => 30, "higiene" => 10, "valor" => "100,00"),
            array("tipo" => "Max", "alimentos" => 60, "higiene" => 20, "valor" => "200,00")
        );

        public function get($index) {
            return $this->cesta[$index];
        }

        public function save($tipo, $alimentos, $higiene, $valor) {
            array_push($this->cesta, array("tipo" => $tipo, "alimentos" => $alimentos, "higiene" => $higiene, "valor" => $valor));
        }

        public function update($index, $tipo, $alimentos, $higiene, $valor) {
            if (!empty($this->cesta[$index])) {

                if (!empty($tipo)) {
                    $this->cesta[$index]["tipo"] = $tipo;
                }

                if (!empty($alimentos)) {
                    $this->cesta[$index]["alimentos"] = $alimentos;
                }

                if (!empty($higiene)) {
                    $this->cesta[$index]["higiene"] = $higiene;
                }

                if (!empty($valor)){
                    $this->cesta[$index]["valor"] = $valor;
                }

            }
        }

        public function delete($index) {
            unset($this->cesta[$index]);
        }

        public function listAll() {
            return $this->cesta;
        }

        public function getCesta() {
            return $this->cesta;
        }

        public function setCesta($cesta) {
            return $this->cesta = $cesta;
        }


    }
