<?php


if(isset($_POST['submit'])){

  $brojRedaka = $_POST['BrojRedaka'];
  $brojStupaca = $_POST['BrojStupaca'];
}

createArray(5,5);
function createArray($column, $row){

    $result = array();
    $sum= $column * $row;
    $current_row= 1;
    $current_column=1;
    $current_number=1;

    for ($i=$current_column; $i <= $column ; $i++) { 
        $result[$current_row][$i] = $current_number++;
        if($i == $column){
            $current_row++;
            $current_column=$i;
        } 
    }
    for ($a= $current_row; $a <= $row; $a++) { 
        $result[$a][$current_column]=$current_number++;
        if($a == $row){
            $current_row=$a;
            $current_column--;
        }
    }

    echo 'row ' . $current_row .'<br>';
    echo 'colum ' . $current_column .'<br>';

    print_r($result);


}

?>