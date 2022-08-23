<?php

RequirePage::controller('controller_login');
RequirePage::model('Crud');
RequirePage::model('Timbre');
RequirePage::model('Enchere');

class CreateEnchereController{

    public function index() {

        $privilege = $_SESSION['privilege'];

        if($privilege == 'admin') {

            $enchere = new Timbre();

            $timbre = $enchere->timbreEnchere();

            $view = new View('createEnchere');

            $view->assign("timbre", $timbre);
        }

    }

    public function create() {
        $data = $_POST;
        //print_r($data);

        $timbre = new Enchere();
        $insert = $timbre->insert($data);


        RequirePage::redirect('/encheres/index.php/portailEncheres');

    }

}

?>