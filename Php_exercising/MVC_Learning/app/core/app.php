<?php

class app{

    protected $controller = 'home';
    protected $method = 'index';
    protected $params= [];

    public function __construct(){
      $url =  $this-> parseUrl();

      if(file_exists('../app/controller'.$url[0].'.php' )){
        $this-> controller = $url[0];
        unset($url[0]);
      }
      require_once('../app/controller'.$this->controller.'.php');

    }

    public function parseUrl(){

        if(isset($_GET['url']))
        {
            return $url = explode('/',filter_var(rtrim($_GET['url'], '/'),FILTER_SANITIZE_URL));
        }
    }

}