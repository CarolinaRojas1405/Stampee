<?php

class RequirePage {

    static function model($page) {
        return require_once 'model/'.$page.'.php';
    }

    static function controller($page){
      return require_once 'controller/'.$page.'.php';
    }

    static public function redirect($url)
    {
      header("Location: $url");
      exit;
    }
}


?>