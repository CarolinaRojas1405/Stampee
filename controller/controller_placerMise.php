<?php

RequirePage::model('Crud');
RequirePage::model('Timbre');
RequirePage::model('Images');
RequirePage::model('Enchere');
RequirePage::model('Offre');

class PlacerMiseController{


   public function mise($id) {

      $timbre = new Timbre();

      $ficheTimbre = $timbre->ficheTimbre($id);

      $prixMax = new Offre();

      $prix = $prixMax->prixMax($id);

      $view = new View('placerMise');

      $view->assign("ficheTimbre", $ficheTimbre);
      $view->assign("offreSuivante", $prix);


   }

   public function placer() {

      $data = $_POST;
      //print_r($data);
      $id = $_POST['enchere_id'];
      //print_r($id);

      $offre = new Offre();

      $placerOffre = $offre->insert($data);

      $msg = 'Votre offre a été placée correctement !';

      $view = new View('resultatMise');

      $view->assign("msg", $msg);

      //RequirePage::redirect('/encheres/index.php/home');

   }


}

?>