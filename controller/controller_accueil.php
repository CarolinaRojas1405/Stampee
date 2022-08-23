<?php

RequirePage::model('Crud');


class AccueilController{

   public function index() {

      new View('accueil');

   }

}

?>