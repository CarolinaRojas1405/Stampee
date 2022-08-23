<?php

RequirePage::controller('controller_login');
RequirePage::model('Crud');
RequirePage::model('Timbre');
RequirePage::model('Enchere');

class ListeTimbresController{

    public function index() {

        $privilege = $_SESSION['privilege'];

        if($privilege == 'admin') {

            $timbre = new Timbre();

            $liste = $timbre->select();
            //print_r($liste);

            $enchere = new Enchere();

            $listeEncheres = $enchere->select();

            //print_r($listeEncheres);

            $view = new View('listeTimbres');

            $view->assign("liste", $liste);
            $view->assign("listeEncheres", $listeEncheres);
        }

    }



}

?>
