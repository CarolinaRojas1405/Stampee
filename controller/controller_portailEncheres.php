<?php

RequirePage::model('Crud');
RequirePage::model('Timbre');


class PortailEncheresController{

   public function index() {

      $enchere = new Timbre();

      $listeTimbres = $enchere->enchere();

      $view = new View('portailEncheres');

      $view->assign("listeTimbre", $listeTimbres);

   }



}

?>