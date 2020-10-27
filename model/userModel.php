<?php 

    class userModel {

        private $user = array(USERADMIN, USER);

        public function save($name, $user, $password) {
            if (!empty($name) && !empty($user) && !empty($password)) {

                array_push($this->user, array("name" => $name, "user" => $user, "password" => $password));

            }
        }

        public function update($index, $name, $user, $password) {
            if (!empty($this->user[$index])) {

                if (!empty($name)) {
                    $this->user[$index]["name"] = $name;
                }

                if (!empty($user)) {
                    $this->user[$index]["user"] = $user;
                }

                if (!empty($password)) {
                    $this->user[$index]["password"] = $password;
                }

            }
        }

        public function delete($index) {
            unset($this->user[$index]);
        }

        public function listAll() {
            return $this->user;
        }

        public function getUserAdmin() {
            return $this->userAdmin;
        }

        public function getUser() {
            return $this->user;
        }

        public function setUser($user) {
            return $this->user = $user;
        }


    }

?>