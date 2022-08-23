<?php

RequirePage::model('Crud');
RequirePage::model('Timbre');

class RechercheController{

    public function index() {


       $recherche = $_POST['recherche'];

       $timbre = new Timbre();

       $liste = $timbre->recherche_timbre($recherche);
       //var_dump($liste);

       $view = new View('recherche');

       $view->assign("liste", $liste);
    }


}

?>
