<?php
    session_start();
    class Template{
        public function getIntro(){
            if (isset($_SESSION["login"]) and $_SESSION["login"] == true){
                
                    require_once "view/template.php";
                }else{
                    require_once "view/module/login.php";
                }
            
        }
    }

?>