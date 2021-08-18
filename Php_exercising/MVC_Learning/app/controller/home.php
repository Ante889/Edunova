<?php


class Home extends controller{

    public function index($name = ''){
        
        $user = $this-> model('User');
        $user -> name = $name;
        echo $user->name;
    }
}