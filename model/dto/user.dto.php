<?php

    class User{

        private $code;
        private $user;
        private $password;
        private $name;
        private $lastname;

        public function getCode(){
            return $this -> code;
        }

        public function getUser(){
            return $this -> user;
        }

        public function getPassword(){
            return $this -> password;
        }

        public function getName(){
            return $this -> name;
        }

        public function getLastname(){
            return $this -> lastname;
        }

        public function setCode($code){
            $this-> code = $code;
        }

        public function setUser($user){
            $this-> user = $user;
        }

        public function setPassword($password){
            $this-> password = $password;
        }

        public function setName($name){
            $this-> name = $name;
        }

        public function setLastname($lastname){
            $this-> lastname = $lastname;
        }



    }

?>