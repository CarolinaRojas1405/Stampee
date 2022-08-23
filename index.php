<?php
session_start();
require_once __DIR__.'/controller/RequirePage.php';
require_once __DIR__.'/controller/controller_view.php';
require_once __DIR__.'/controller/controller_session.php';


// recuperation du chemin (URL)

$url = isset($_SERVER['PATH_INFO']) ? explode ('/',ltrim($_SERVER['PATH_INFO'], '/')) : '/' ;


if($url=="/"){
    //demande le controleur Index();
    $controller->index();
}else{
    $requestUrl=$url[0];
    //recuperer le controleur
    $controllerPath = __DIR__.'/controller/controller_'.$requestUrl.'.php';

    if(file_exists($controllerPath)){
        require_once $controllerPath;

        $controllerName = ucfirst($requestUrl).'Controller';

        $controller = new $controllerName;

        //methode + post
        if(isset($url[1])){
            $method = $url[1];
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $controller->$method();
                }
        //methode + get
                if(isset($url[2])){
                $id =  $url[2];
                $controller->$method($id);
                }
            }else{
        //land page index
            $controller->index();
            }


    }else{
        echo "la page n'exist pas";
    }

}

?>