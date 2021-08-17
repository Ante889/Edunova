<?php


class Home extends controller{

    public function index($name = ''){
        echo 'home/index.php <br>';
        echo $name;
    }
}