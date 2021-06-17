<?php


if(isset($_POST['submit'])){

  $brojRedaka = $_POST['BrojRedaka'];
  $brojStupaca = $_POST['BrojStupaca'];
}

createArray(5,5);
function createArray($column, $row){

    $result = array();
    $current_row= 1;
    $current_column=1;
    $current_number=1;
    $finished_rows=0;
    $finished_column=0;



        for ($i=$current_column; $i <= $column-$finished_column ; $i++) { 
            $result[$current_row][$i] = $current_number++;
            if($i == $column){
                $current_row++;
                $current_column=$i;
                $finished_rows++;
            } 
        }
        for ($a= $current_row; $a <= $row-$finished_rows; $a++) { 
            $result[$a][$current_column]=$current_number++;
            if($a == $row){
                $current_row=$a;
                $current_column--;
                $finished_column++;
            }
        }





    echo 'row ' . $current_row .'<br>';
    echo 'colum ' . $current_column .'<br>';

    print_r($result);


}

?>