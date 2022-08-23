<?php

class LogoutController{

    public function index(){
        session_unset();
        session_destroy();
        RequirePage::redirect('/encheres/index.php/accueil');
    }


}


 ?>
