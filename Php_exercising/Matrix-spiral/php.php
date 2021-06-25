<?php

if(isset($_POST['submit'])){

    $Column_num=$_POST['BrojStupaca'];
    $Row_num=$_POST['BrojRedaka'];
    isset($_POST['Obrnuto'])?$Reverse=$_POST['Obrnuto']: $Reverse='';
    if($Column_num > 0 && $Row_num > 0){

      $result = array(); //niz za matrix
      $result_arrows=(array)null; // niz za smjer
      $end_number= $_POST['BrojRedaka']*$_POST['BrojStupaca']; //najveći broj u nizu
      CreateArray($Column_num,$Row_num,$Reverse);
      if($Reverse){
          $result=Reverse($result, $_POST['BrojStupaca']);
      }
      $result_arrows= SetNullArrowsArray($result_arrows);
      ShowResult($Reverse);

    }else{
      echo "error";
    }
  }


function CreateArray($column, $row,$Reverse){

    global $result;
    global $result_arrows; 
    global $end_number;  
    $current_row= 1; // Trenutni red
    $current_column=1; // Trenutna kolona 
    $current_number=1; // Trenutni broj koji ide u niz
    $number_of_rotate_arrays=0; //Key za 'rotate-arrays' niz
    $true=true; // if u for-u će se dogoditi samo jednom
    
            //Provjeri koliko je row i prođi kroz forloop toliko puta
            for ($z=0; $z <=$row; $z++) { 

               //Prolazak kroz matrix u 4 for-a
                for ($i=$current_column; $i <= $column; $i++) { 
                    //Zadnji broj će ući u 'rotate-arrays' i njega će trebati okrenuti
                    if($true){
                        $result_arrows['rotate-arrays'][$number_of_rotate_arrays++]=$current_number-1;
                        $true=false;
                    }
                    //Provjeri je li broj već dodan u neki red, ako nije dodaj mu stranu, red, kolonu,broj
                    if(isset($result[$current_row][$i])){                 
                        continue;
                    }else{
                        $result_arrows['left'][$current_number]=$current_number;
                    $result[$current_row][$i] = $current_number++;
                    //Označi da je jedan red gotov i odredi poziciju za idući red
                    if($i == $column - $z){
                        $current_column=$i;
                        $true=true;
                    } 
                    }
                    
                }
                for ($a= $current_row; $a <= $row; $a++) { 

                    if($true){
                        $result_arrows['rotate-arrays'][$number_of_rotate_arrays++]=$current_number-1;
                        $true=false;
                    }
                    if(isset($result[$a][$current_column])){
                        continue;
                    }else{
                        $result_arrows['up'][$current_number]=$current_number;
                    $result[$a][$current_column]=$current_number++;
                    if($a == $row - $z){
                        $current_row=$a;
                        $true=true;
                    }
                }
            }
                for ($b=$current_column; $b > 0; $b--) { 

                    if($true){
                        $result_arrows['rotate-arrays'][$number_of_rotate_arrays++]=$current_number-1;
                        $true=false;
                    }

                    if(isset($result[$current_row][$b])){
                        continue;
                    }else{
                        $result_arrows['right'][$current_number]=$current_number;
                    $result[$current_row][$b] = $current_number++;
                    if($b == 1 + $z){
                        $current_column=$b;
                        $true=true;
                    } 
                }
            }
                for ($c= $current_row; $c >= 1; $c--) { 

                    if($true){
                        $result_arrows['rotate-arrays'][$number_of_rotate_arrays++]=$current_number-1;
                        $true=false;
                    }                    
                    if(isset($result[$c][$current_column])){
                        continue;
                    }else{
                        $result_arrows['down'][$current_number]=$current_number;
                    $result[$c][$current_column]=$current_number++;
                    if($c == 2 +$z){
                        $current_row=$c;
                        $true=true;
                    }
                }
            }
        }
    }


//Obrnuto
function Reverse($array, $column)
{
    $a=0;
    foreach($array as $key){
        $a++;
    for ($i=1; $i <=$column ; $i++) { 
        $result_column[$i][$a]=$key[$i];
        }
    }   
    return $result_column;
}


function SetNullArrowsArray($Array){
        //U slučaju da ne može doći do loop-a bit će eror kad budemo prikazivali
        switch ($Array) {
            case empty($Array['down']):
                $Array['down'][0]=null;
                break;
            case empty($Array['up']):
                $Array['up'][0]=null;
                break;    
            case empty($Array['left']):
                $Array['left'][0]=null;
                break;
            case empty($Array['right']):
                $Array['right'][0]=null;
                break;              
        }
        return $Array;
    }
   
function ShowResult($Reverse){    
        //Smjerovi
        global $result;
        global $result_arrows; 
        global $end_number; 

        if($Reverse){
            $Direction=array('up','down','left','right');
            $td_direction=array('td-left-right','td-left-right','td-up-down','td-up-down');
            $Rotate_direction=array('td-right-down','td-left-up','td-left-down','td-right-up');
            $rows=$_POST['BrojStupaca'];
            $columns= $_POST['BrojRedaka'];
        }else{
            $Direction=array('left','right','up','down');
            $td_direction=array('td-left-right','td-left-right','td-up-down','td-up-down');
            $Rotate_direction=array('td-right-up','td-left-down','td-right-down','td-left-up');
            $rows=$_POST['BrojRedaka'];
            $columns=$_POST['BrojStupaca'];
        }

        //Prođi kroz redove i prikaži 
        echo '<table>';    

        for ($s=$rows; $s >= 1 ; $s--) { 
            echo "<tr>";
            //Prođi kroz svaki broj u tom redu i provjeri kako treba biti okrenut
            for ($j=$columns; $j >=1; $j--) { 
                if($result[$s][$j] === $end_number || $result[$s][$j] === 1){
                    echo "<td class='td-no-back'>".$result[$s][$j]."</td>";                
                }else{
                for ($i=0; $i <=3 ; $i++) { 
                    if(in_array($result[$s][$j], $result_arrows[$Direction[$i]]) && !in_array($result[$s][$j], $result_arrows['rotate-arrays'])){
                        echo "<td class='$td_direction[$i]'>".$result[$s][$j]."</td>";   
                    }
                }
            }
                //Prođi kroz brojeve koji trebaju biti drugačije okrenuti u redu i okreni ih
                if(in_array($result[$s][$j], $result_arrows['rotate-arrays']) && $result[$s][$j] !=$end_number){
                
                for ($i=0; $i <= 3; $i++) { 
                    if(in_array($result[$s][$j], $result_arrows[$Direction[$i]])){
                        echo "<td class='$Rotate_direction[$i]'>".$result[$s][$j]."</td>";   
                    }
                }
            }
            
        }
        echo "</tr>";
    }
echo '</table>'; 
}