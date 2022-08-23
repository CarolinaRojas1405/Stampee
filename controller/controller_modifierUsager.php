<?php

RequirePage::controller('controller_login');
RequirePage::model('Crud');
RequirePage::model('Usager');


class ModifierUsagerController{

    public function index() {

        $privilege = $_SESSION['privilege'];

        if($privilege == 'admin') {

            $usager = new Usager();

            $user = $usager->select();
            //print_r($user);

            $view = new View('modifierUsager');

            $view->assign("usager", $user);
        }
    }

    public function modifier() {

        $privilege = $_SESSION['privilege'];

        if($privilege == 'admin') {

            $id = $_POST['user'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $privilege = $_POST['privilege'];
            $pays_residence = $_POST['pays_residence'];


            $user = new Usager();
            $update = $user->updateUser($id, $nom, $prenom, $privilege, $pays_residence);
        }

        RequirePage::redirect('/encheres/index.php/listeUsager');


    }

    public function delete($id) {

        $privilege = $_SESSION['privilege'];

        if($privilege == 'admin') {

            $user = new Usager();

            $delete = $user->deleteUser($id);

            RequirePage::redirect('/encheres/index.php/listeUsager');
        }

    }




}

?>