<?php

RequirePage::model('Crud');
RequirePage::model('Usager');

class LoginController{

    public function index(){

        new View('login');
    }


    public function validLogin(){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = new Usager();

        $usager = $user->checkUser($username);

        if($usager) {
            $userId = $usager['id'];
            $privilege = $usager['privilege'];
            $username = $usager['username'];
            $dbPassword = $usager['password'];

            if(password_verify($password, $dbPassword)) {

                session_regenerate_id();
                $_SESSION['id'] = $userId;
                $_SESSION['privilege'] = $privilege;
                $_SESSION['user'] = $username;

                    if($_SESSION['privilege'] == 'client') {

                        RequirePage::redirect('/encheres/index.php/home');

                    }else if($_SESSION['privilege'] == 'admin') {

                        RequirePage::redirect('/encheres/index.php/admin');

                    }
            }else {
                echo "Mauvaise combinaison username / password";
            }

        }else {
            echo "Mauvaise combinaison username / password";
        }

    }

}

?>