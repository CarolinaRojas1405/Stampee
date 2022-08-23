<?php

RequirePage::model('Crud');
RequirePage::model('Usager');
RequirePage::controller('controller_password');


class RegisterController{

   public function index() {

     new View('register');


   }


   public function registerUser(){

      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $username = $_POST['email'];
      $privilege = $_POST['privilege'];
      $pays_residence = $_POST['pays_residence'];

      date_default_timezone_set('America/Montreal');
      $date_register = date('Y-m-d', time());


      $hashPassword = PasswordHash::hashPassword($_POST['password']);

      $data = ['username' => $username, 'password' => $hashPassword, 'nom' => $nom, 'prenom' => $prenom, 'privilege' => $privilege, 'pays_residence' => $pays_residence, 'date_register' => $date_register];

      $user = new Usager();
      $newUser = $user->insert($data);

      RequirePage::redirect('/encheres/index.php/login');
   }
}

?>
