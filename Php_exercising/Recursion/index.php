<?php

//Proučiti pojam rekurzija. Riješiti zadatak zbrajanja prvih 100 brojeva rekurzijom.

$Rezultat=0;

function Zbrajanbrojeva(int $OdBroja, int $DoBroja)
{
    global $Rezultat;
    if($OdBroja <= $DoBroja){
        $Rezultat= $Rezultat+$OdBroja;
        $OdBroja++;
        Zbrajanbrojeva($OdBroja,$DoBroja);
    }else{
        echo $Rezultat;
    }
    
}

Zbrajanbrojeva(1,100);

?>