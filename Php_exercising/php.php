<?php


if(isset($_POST['submit'])){

  $brojRedaka = $_POST['BrojRedaka'];
  $brojStupaca = $_POST['BrojStupaca'];
}

createArray(4,4);
function createArray($column, $row){

    $result = array();
    $current_row= 1;
    $current_column=1;
    $current_number=1;

    for ($z=0; $z < $row ; $z++) { 
        for ($i=$current_column; $i <= $column; $i++) { 
            if(isset($result[$current_row][$i])){
                continue;
            }else{
            $result[$current_row][$i] = $current_number++;
            if($i == $column - $z){
                $current_column=$i;
            } 
            }
            
        }
        for ($a= $current_row; $a <= $row; $a++) { 
            if(isset($result[$a][$current_column])){
                continue;
            }else{
            $result[$a][$current_column]=$current_number++;
            if($a == $row - $z){
                $current_row=$a;
            }
        }
    }
        for ($b=$current_column; $b > 0; $b--) { 
            if(isset($result[$current_row][$b])){
                continue;
            }else{
            $result[$current_row][$b] = $current_number++;
            if($b == 1 + $z){
                $current_column=$b;
            } 
        }
    }
        for ($c= $current_row; $c >= 1; $c--) { 
            if(isset($result[$c][$current_column])){
                continue;
            }else{
            $result[$c][$current_column]=$current_number++;
            if($c == 2 +$z){
                $current_row=$c;
            }
        }
    }
 }
        
         
        

    echo 'row ' . $current_row .'<br>';
    echo 'colum ' . $current_column .'<br>';

    print_r($result);


}

?>