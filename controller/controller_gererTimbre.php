<?php
RequirePage::controller('controller_login');
RequirePage::model('Crud');
RequirePage::model('Timbre');
RequirePage::model('Usager');
RequirePage::model('Condition');
RequirePage::model('Images');



class GererTimbreController{

    public function index() {

        $etat = new Condition();

        $condition = $etat->selectCondition();

        $usager = new Usager();

        $vendeur = $usager->select();


        $privilege = $_SESSION['privilege'];

        //$user = $_SESSION['id'];

        if($privilege == 'admin') {

            $view = new View('ajouterTimbre');

            $view->assign("condition", $condition);

            $view->assign("vendeur", $vendeur);
        }
    }

    public function ajouter() {

        //$data = $_POST;
        //print_r($data);

        $nom = $_POST['nom'];
        $date_creation = $_POST['date_creation'];
        $pays_origine = $_POST['pays_origine'];
        $couleur = $_POST['couleur'];
        $dimensions = $_POST['dimensions'];
        $certificat = $_POST['certificat'];
        $condition_id = $_POST['condition_id'];
        $usager_id = $_POST['usager_id'];

        $url = $_POST['url'];
        $titre = $_POST['titre'];
        $image_principale = $_POST['image_principale'];

        $data = ['nom' => $nom, 'date_creation' => $date_creation, 'pays_origine' => $pays_origine, 'couleur' => $couleur, 'dimensions' => $dimensions, 'certificat' => $certificat, 'condition_id' => $condition_id, 'usager_id' => $usager_id];

        $timbre = new Timbre();
        $insert = $timbre->insert($data);

        $timbre_id = $insert;

        $data = ['url' => $url, 'titre' => $titre, 'image_principale' => $image_principale, 'timbre_id' => $timbre_id];


        $image = new Images();
        $add = $image->insert($data);

        RequirePage::redirect('/encheres/index.php/listeTimbres');

    }

    public function delete($id) {

        $privilege = $_SESSION['privilege'];


        if($privilege == 'admin') {

            $image = new Images();
            $delete = $image->deleteImage($id);

            $timbre = new Timbre();
            $delete = $timbre->deleteTimbre($id);

            RequirePage::redirect('/encheres/index.php/listeTimbres');
        }

    }


}

?>