<?php

RequirePage::controller('controller_login');
RequirePage::model('Crud');


class AdminController{

    public function index(){

        new View('admin');



    }



}


?>