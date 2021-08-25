<?php

class App
{
    public static function start()
    {
        $ruta = Request::getRuta();
        $djelovi = explode('/', $ruta);
        $klasa ='';
        if(!isset($djelovi[1]) || $djelovi[1] == ''){
            $klasa= 'Index';
        }else{
            $klasa= ucfirst($djelovi[1]);
        }
        $klasa.='Controller';
        //echo $klasa;

        $metoda = '';

        if(!isset($djelovi[2]) || $djelovi[2] == ''){
            $metoda= 'index';
        }else{
            $metoda= $djelovi[2];
        }
        if(class_exists($klasa) && method_exists($klasa,$metoda)){
            $instanca = new $klasa();
            $instanca -> $metoda();
        }else{
            echo 'Čak niti HGSS ne može naći što tražite '. $klasa . '->' . $metoda;
        }
    }

}



