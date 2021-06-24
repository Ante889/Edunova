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

//////////FUNKCIJE//////////////  https://www.exakat.io/en/top-100-php-functions/

$Array= array(1,2,1,23,684,9498,1961,898,8948896,[1,2,3],'test',1.10);

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



// 3. substr
echo '<hr>';
$Test= "OvoJeTest";
echo substr($Test, 0,3);
echo substr($Test,3,2);
echo substr($Test, 5);


// 4. in_array 
echo '<hr>';
if(in_array(1.10,$Array, true)){
    echo true;
}


//5. explode
echo '<hr>';
$a='Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s when an unknown printer took a galley';
print_r(explode(' ',$a));

print_r(explode(' ',$a,4));