<?php
   // require_once "../model/dao/user.dao.php";
    // require_once "../model/dto/user.dto.php";

    class UserController{

        public function getVerifyPass($user,$pass){

            try{

                $objDtoUser = New User();
                $objDtoUser -> setUser($user);
                $objDtoUser -> setPassword($pass);

                $objDaoUser = new UserModel($objDtoUser);

                if (gettype($objDaoUser -> getQueryLogin() -> fetch()) == "boolean"){
                    
                    print "
                    <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                      })
                    </script>";
                }else{
                    $_SESSION["login"] = true;
                    header("location: index.php");
                }
            }catch(exception $e){

                print "There was a mistake on the creation of the controller";
        }
    }

    }

   // $objctr = new UserController();
   // $objctr -> getVerifyPass("perrote","4574")

?>