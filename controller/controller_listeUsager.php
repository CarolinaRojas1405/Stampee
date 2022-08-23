<?php

RequirePage::controller('controller_login');
RequirePage::model('Crud');
RequirePage::model('Usager');
RequirePage::model('Timbre');
RequirePage::model('Offre');

class ListeUsagerController{

    public function index() {

        $privilege = $_SESSION['privilege'];

        if($privilege == 'admin') {

            $user = new Usager();

            $liste = $user->select();

            $usager = new Timbre();

            $userTimbre = $usager->select();

            $offre = new Offre();

            $userOffre = $offre->userOffre();

            //print_r($userTimbre);

            $view = new View('listeUsager');

            $view->assign("userList", $liste);
            $view->assign("userTimbre", $userTimbre);
            $view->assign("userOffre", $userOffre);
        }

    }

}

?>