<?php

RequirePage::model('Crud');


class SessionController{

    static function login(){

        if(isset($_SESSION['id']) && $_SESSION['username'] && $_SESSION['privilege']){

            return true;

        }
        else{

          RequirePage::redirect('login');
        }

    }

}




 ?>