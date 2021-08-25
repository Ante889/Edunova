<?php

class Request
{

    public static function getRuta()
    {
        $ruta = '/';
        if(isset($_SERVER['REDIRECTION_PATH_INFO'])){
            $ruta=$_SERVER['REDIRECTION_PATH_INFO'];
        }else if($_SERVER['REQUEST_URI']){
            $ruta=$_SERVER['REQUEST_URI'];
        }
        // bilo što gdje može biti 
        return $ruta;
    }

}