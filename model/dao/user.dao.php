<?php

   // require_once "../model/conexion.php";
   // require_once "../model/dto/user.dto.php";
    class UserModel{

        private $code;
        private $user;
        private $password;
        private $name;
        private $lastname;

        public function __construct($objDtoUser){
           $this-> code     = $objDtoUser -> getCode();
           $this-> user     = $objDtoUser -> getUser();
           $this-> password = $objDtoUser -> getPassword();
           $this-> name     = $objDtoUser -> getName();
           $this-> lastname = $objDtoUser -> getLastname(); 
        }

        public function getQueryLogin(){

            $sql = "SELECT * FROM usuario
                    WHERE USER = ? AND PASSWORD = ?";
            
            try {
                $objcon = new Conexion();

                $stmt = $objcon -> getConect() -> prepare($sql); 
                $stmt -> bindParam(1, $this -> user, PDO::PARAM_STR);
                $stmt -> bindParam(2, $this -> password, PDO::PARAM_STR);
                $stmt -> execute();

                $result = $stmt;

            } catch (Exception $e) {
                print "error al consultar usuario ". $e -> getMessage();
            }

            return $result;
        }

    }

    

?>