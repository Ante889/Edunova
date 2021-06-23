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
 echo '<hr>';

//////////FUNKCIJE//////////////

$Array= array(1,2,1,23,684,9498,1961,898,8948896,[1,2,3]);

// 1. COUNT
echo '<hr>';
echo count($Array);
echo count($Array, COUNT_RECURSIVE);


// 2. is_array
echo '<hr>';
$String="String";
echo is_array($Array)? 'yes':'no';
echo '<br>';
echo is_array($String)? 'yes':'no';




