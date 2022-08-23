<?php

RequirePage::controller('controller_login');
RequirePage::model('Crud');
RequirePage::model('Timbre');


class HomeController{

    public function index(){

        $enchere = new Timbre();

        $listeTimbres = $enchere->enchere();

        $view = new View('home');

        $view->assign("listeTimbre", $listeTimbres);


    }

}


?>