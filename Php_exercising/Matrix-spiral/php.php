<?php

if(isset($_POST['submit'])){

    $Column_num=$_POST['BrojStupaca'];
    $Row_num=$_POST['BrojRedaka'];
    isset($_POST['Obrnuto'])?$Reverse=$_POST['Obrnuto']: $Reverse='';
    if($Column_num > 0 && $Row_num > 0){
      createArray($Column_num,$Row_num,$Reverse);
    }else{
      echo "error";
    }

    
  }

function createArray($column, $row,$Reverse){

    $result = array(); //niz za matrix
    $result_arrows=array(); // niz za smjer
    $end_number= $row*$column; //najveći broj u nizu 
    $current_row= 1; // Trenutni red
    $current_column=1; // Trenutna kolona 
    $current_number=1; // Trenutni broj koji ide u niz
    $number_of_rotate_arrays=0; //Key za 'rotate-arrays' niz
    $true=0; // if u for-u će se dogoditi samo jednom
    
            //Provjeri koliko je row i prođi kroz forloop toliko puta
            for ($z=0; $z <=$row; $z++) { 

               //Prolazak kroz matrix u 4 for-a
                for ($i=$current_column; $i <= $column; $i++) { 
                    //Zadnji broj će ući u 'rotate-arrays' i njega će trebati okrenuti
                    if($true==0){
                        $result_arrows['rotate-arrays'][$number_of_rotate_arrays++]=$current_number-1;
                        $true=1;
                    }
                    //Provjeri je li broj već dodan u neki red, ako nije dodaj mu stranu, red, kolonu,broj
                    if(isset($result[$current_row][$i])){                 
                        continue;
                    }else{
                    if(isset($result_arrows['left'][$i])){
                        $result_arrows['left'][$current_number]=$current_number;
                    }else{
                        $result_arrows['left'][$i]=$current_number;
                    }
                    $result[$current_row][$i] = $current_number++;
                    //Označi da je jedan red gotov i odredi poziciju za idući red
                    if($i == $column - $z){
                        $current_column=$i;
                        $true=0;
                    } 
                    }
                    
                }
                for ($a= $current_row; $a <= $row; $a++) { 

                    if($true==0){
                        $result_arrows['rotate-arrays'][$number_of_rotate_arrays++]=$current_number-1;
                        $true=1;
                    }

                    if(isset($result[$a][$current_column])){
                         $result[$a][$current_column];
                        continue;
                    }else{
                        if(isset($result_arrows['up'][$a])){
                            $result_arrows['up'][$current_number]=$current_number;
                        }else{
                            $result_arrows['up'][$a]=$current_number;
                        }
                    $result[$a][$current_column]=$current_number++;
                    if($a == $row - $z){
                        $current_row=$a;
                        $true=0;
                    }
                }
            }
                for ($b=$current_column; $b > 0; $b--) { 

                    if($true==0){
                        $result_arrows['rotate-arrays'][$number_of_rotate_arrays++]=$current_number-1;
                        $true=1;
                    }

                    if(isset($result[$current_row][$b])){
                        continue;
                    }else{
                        if(isset($result_arrows['right'][$b])){
                            $result_arrows['right'][$current_number]=$current_number;
                        }else{
                            $result_arrows['right'][$b]=$current_number;
                        }
                    $result[$current_row][$b] = $current_number++;
                    if($b == 1 + $z){
                        $current_column=$b;
                        $true=0;
                    } 
                }
            }
                for ($c= $current_row; $c >= 1; $c--) { 

                    if($true==0){
                        $result_arrows['rotate-arrays'][$number_of_rotate_arrays++]=$current_number-1;
                        $true=1;
                    }                    

                    if(isset($result[$c][$current_column])){
                        continue;
                    }else{
                        if(isset($result_arrows['down'][$c])){
                            $result_arrows['down'][$current_number]=$current_number;
                        }else{
                            $result_arrows['down'][$c]=$current_number;
                        }
                    $result[$c][$current_column]=$current_number++;
                    if($c == 2 +$z){
                        $current_row=$c;
                        $true=0;
                    }
                }
            }
        }


        //Obrnuto
        if($Reverse == TRUE){
            $result_column=array();;
            $a=0;
            foreach($result as $key){
                $a++;
                for ($i=1; $i <=$column ; $i++) { 
                    $result_column[$i][$a]=$key[$i];
                }
            }
            $result= $result_column;
        }

        //U slučaju da ne može doći do loop-a bit će eror kad budemo prikazivali
        switch ($result_arrows) {
            case empty($result_arrows['down']):
                $result_arrows['down'][0]=null;
                break;
            case empty($result_arrows['up']):
                $result_arrows['up'][0]=null;
                break;    
            case empty($result_arrows['left']):
                $result_arrows['left'][0]=null;
                break;
            case empty($result_arrows['right']):
                $result_arrows['right'][0]=null;
                break;              
        }
   
        //Smjerovi

        if($Reverse){
            $Direction=array('up','down','left','right');
            $Rotate_direction=array('td-right-down','td-left-up','td-left-down','td-right-up');
            $rows=$column;
            $columns=$row;
        }else{
            $Direction=array('left','right','up','down');
            $Rotate_direction=array('td-right-up','td-left-down','td-right-down','td-left-up');
            $rows=$row;
            $columns=$column;
        }

        //Prođi kroz redove i prikaži 
        echo '<table>';    

        for ($s=$rows; $s >= 1 ; $s--) { 
            echo "<tr>";
            //Prođi kroz svaki broj u tom redu i provjeri kako treba biti okrenut
            for ($j=$columns; $j >=1; $j--) { 
                if($result[$s][$j] === $end_number || $result[$s][$j] === 1){
                    echo "<td class='td-no-back'>".$result[$s][$j]."</td>";                
                }elseif(in_array($result[$s][$j], $result_arrows[$Direction[0]]) && !in_array($result[$s][$j], $result_arrows['rotate-arrays']) ){
                    echo "<td class='td-left-right'>".$result[$s][$j]."</td>";   
                }elseif(in_array($result[$s][$j], $result_arrows[$Direction[1]]) &&!in_array($result[$s][$j], $result_arrows['rotate-arrays'])){
                    echo "<td class='td-left-right'>".$result[$s][$j]."</td>"; 
                }elseif(in_array($result[$s][$j], $result_arrows[$Direction[2]])  &&!in_array($result[$s][$j], $result_arrows['rotate-arrays'])){
                    echo "<td class='td-up-down'>".$result[$s][$j]."</td>";   
                }elseif(in_array($result[$s][$j], $result_arrows[$Direction[3]])  &&!in_array($result[$s][$j], $result_arrows['rotate-arrays'])){
                    echo "<td class='td-up-down'>".$result[$s][$j]."</td>";   
                }

                //Prođi kroz brojeve koji trebaju biti drugačije okrenuti u redu i okreni ih
                if(in_array($result[$s][$j], $result_arrows['rotate-arrays']) && $result[$s][$j] !=$end_number){

                if(in_array($result[$s][$j], $result_arrows[$Direction[0]])){
                    echo "<td class='$Rotate_direction[0]'>".$result[$s][$j]."</td>";   
                }elseif(in_array($result[$s][$j], $result_arrows[$Direction[1]])){
                    echo "<td class='$Rotate_direction[1]'>".$result[$s][$j]."</td>";   
                }elseif(in_array($result[$s][$j], $result_arrows[$Direction[2]])){
                    echo "<td class='$Rotate_direction[2]'>".$result[$s][$j]."</td>"; 
                }elseif(in_array($result[$s][$j], $result_arrows[$Direction[3]])){
                    echo "<td class='$Rotate_direction[3]'>".$result[$s][$j]."</td>";   
                }
            }
            
        }
        echo "</tr>";
    }
}
echo '</table>'; 