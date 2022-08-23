<?php

RequirePage::controller('controller_login');
RequirePage::model('Crud');
RequirePage::model('Timbre');


class ModifierTimbreController{

    public function modifier($id) {

        $privilege = $_SESSION['privilege'];

        if($privilege == 'admin') {

            $timbre = new Timbre();

            $modifier = $timbre->selectId($id);
            //var_dump($modifier);

            $view = new View('modifierTimbre');

            $view->assign("timbre", $modifier);
        }

    }

    public function update() {

        //$data = $_POST;
        //var_dump($data);

        $privilege = $_SESSION['privilege'];

        if($privilege == 'admin') {

            $id = $_POST['id'];
            $date_creation = $_POST['date_creation'];
            $pays_origine = $_POST['pays_origine'];
            $certificat = $_POST['certificat'];

            $user = new Timbre();
            $update = $user->updateTimbre($id, $date_creation, $pays_origine, $certificat);
        }


       RequirePage::redirect('/encheres/index.php/listeTimbres');

    }



}

?>