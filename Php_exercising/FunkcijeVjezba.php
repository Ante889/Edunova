<?php
//Prosti brojevi


function ProstiBrojevi($broj):bool
{

    for ($i=2; $i < $broj; $i++) { 
        if($broj % $i == 0){
            return false;
        }
    }
    return TRUE;
}

if(ProstiBrojevi(11)){
    echo 'Broj je prost';
}else{
    echo 'Broj nije prost';
}


function PrikaziProsteBrojeve($broj1,$broj2)
{

    for ($i=$broj1; $i <= $broj2; $i++) { 
        if(ProstiBrojevi($i)){
            echo $i;
            echo '<br>';

        }
    }
}

PrikaziProsteBrojeve(1,100);