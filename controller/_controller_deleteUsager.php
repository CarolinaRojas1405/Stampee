<?php

RequirePage::controller('controller_login');
RequirePage::model('Crud');
RequirePage::model('Usager');


class DeleteUsagerController{

    public function delete($id) {

        $privilege = $_SESSION['privilege'];

        if($privilege == 'admin') {

            $user = new Usager();

            $delete = $user->deleteUser($id);

            RequirePage::redirect('/encheres/index.php/listeUsager');
        }

    }


}

?>