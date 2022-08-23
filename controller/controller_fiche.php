<?php

RequirePage::model('Crud');
RequirePage::model('Timbre');
RequirePage::model('Images');
RequirePage::model('Enchere');
RequirePage::model('Usager');

class FicheController{


   public function ficheTimbre($id) {

      $timbre = new Timbre();

      $ficheTimbre = $timbre->ficheTimbre($id);
      //var_dump($ficheTimbre);

      $view = new View('fiche');

      $view->assign("ficheTimbre", $ficheTimbre);


   }

}

?>