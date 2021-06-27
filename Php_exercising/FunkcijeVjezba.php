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

$Array= array(3,2,1,23,684,9498,1961,898,8948896,[1,2,3],'test',1.10);
class ClassName{}


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


//6. str_replace
echo '<hr>';

$Sentence= "Lorem Ipsum is simply dummy";
echo str_replace("Lorem","Lorem123", $Sentence);

//7. implode
echo '<hr>';
echo implode(" ",$Array);


//8 strlen

echo '<hr>';
$Varijabla="btaehehet";
echo strlen($Varijabla);


//9 array_merge

$SecondArray= array('a',0,'aa');
$result= array_merge($Array,$SecondArray);
print_r($result);


//10 strpos
echo '<hr>';
$string= "Pozicija Slova a";

echo strpos($string,'a');


//11 preg_match
echo '<hr>';
$Sentence= 'Some Sentence.';
echo preg_match('/Some/',$Sentence);


//12 sprintf

//////////

//13 trim
echo '<hr>';
$String= '  grahe  ';
echo strlen($String);
$String = trim($String);
echo '<br>';
echo strlen($String);


//14 strtolower
echo '<hr>';
$Varijabla = "SOMETHING";
echo strtolower($Varijabla);


//15 file_exists
echo '<hr>';
$filename = 'FunkcijeVjezba.php';
if(file_exists($filename)){
    echo "Postoji";
}else{
    echo "Ne postoji";
}


//16 is_string
echo '<hr>';
$Varijabla= 1;
if(is_string($Varijabla)){
    echo "true";
}else{
    echo "false";
}


//17 preg_replace
echo '<hr>';
$Sentence = "welcome to the jungle";
$Replace = "club";
echo preg_replace('/jungle/',$Replace,$Sentence);


//18 file_get_contents
echo '<hr>';
$Path='Path od nekog recimo txt';
echo file_get_contents($Path);


//19 array_key_exists
echo '<hr>';
echo array_key_exists(1,$Array);

//20 array_keys
echo '<hr>';
print_r(array_keys($Array,'test'));

//21 dirname
echo '<hr>';
echo dirname('C:\Users\Ante\Documents\GitHub\Edunova\Php_exercising');


//22 function_exists
echo '<hr>';
//Postoji li funkcija...

//23 array_map
echo '<hr>';

$Funkcija = function($value){
    return $value * 10;
};

print_r(array_map($Funkcija,[1,2,3,4,5]));

//24 get_class
echo '<hr>';
$Class= new ClassName;
echo get_class($Class);

//25 class_exists
echo '<hr>';
if(class_exists('ClassName')){
    $Class= new ClassName;
}
//26 is_object
echo '<hr>';
if(is_object($Class)){
    echo 'Object';
}
//27 time
echo '<hr>';
echo time();

//28 json_encode
echo '<hr>';
//json

//29 date 
echo '<hr>';

echo date('y-m-d');

//30 is_null
echo '<hr>';
$NullVariable= null;
if(is_null($NullVariable)){
    echo 'true';
}


//31 is_numeric
echo '<hr>';

foreach($Array as $key){
    if(is_numeric($key)){
        echo "Numeric";
    }else{
        echo 'not numeric';
    }
}


//32 array_shift 
echo '<hr>';
array_shift($Array);
print_r($Array);
//treba izbaciti 3 iz niza 


//33 defined
echo '<hr>';
echo '<hr>';

$variabla="String";
define($variabla,'IME');

echo defined($variabla);


//34 is_dir
echo '<hr>';

