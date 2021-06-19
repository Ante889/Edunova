<?php

function createArray($column, $row){

    $result = array();
    $result_arrows=array();
    $end_number= $row*$column;
    $current_row= 1;
    $current_column=1;
    $current_number=1;
    $number_of_rotate_arrays=0;
    $true=0;
    
            for ($z=0; $z <$row; $z++) { 

                
                for ($i=$current_column; $i <= $column; $i++) { 
                    if($true==0){
                        $result_arrows['rotate-arrays'][$number_of_rotate_arrays++]=$current_number-1;
                        $true=1;
                    }

                    if(isset($result[$current_row][$i])){                 
                        continue;
                    }else{
                    if(isset($result_arrows['left'][$i])){
                        $result_arrows['left'][$current_number]=$current_number;
                    }else{
                        $result_arrows['left'][$i]=$current_number;
                    }
                    $result[$current_row][$i] = $current_number++;
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
        
        if($end_number<5){
            $result_arrows['down'][0]=null;
        }


        for ($s=$row; $s >= 1 ; $s--) { 

            for ($j=$column; $j >=1; $j--) { 
                if($result[$s][$j] === $end_number){
                    echo "<div class='square'>".$result[$s][$j]."</div>";
                }elseif(in_array($result[$s][$j], $result_arrows['left']) && !in_array($result[$s][$j], $result_arrows['rotate-arrays']) ){
                    echo "<div class='square-left'>".$result[$s][$j]."</div>";
                }elseif(in_array($result[$s][$j], $result_arrows['right']) &&!in_array($result[$s][$j], $result_arrows['rotate-arrays'])){
                    echo "<div class='square-right'>".$result[$s][$j]."</div>";
                }elseif(in_array($result[$s][$j], $result_arrows['up'])  &&!in_array($result[$s][$j], $result_arrows['rotate-arrays'])){
                    echo "<div class='square-up'>".$result[$s][$j]."</div>";
                }elseif(in_array($result[$s][$j], $result_arrows['down'])  &&!in_array($result[$s][$j], $result_arrows['rotate-arrays'])){
                    echo "<div class='square-down'>".$result[$s][$j]."</div>";
                }

                
                if(in_array($result[$s][$j], $result_arrows['rotate-arrays']) && $result[$s][$j] !=$end_number){

                if(in_array($result[$s][$j], $result_arrows['left'])){
                    echo "<div class='square-up'>".$result[$s][$j]."</div>";
                }elseif(in_array($result[$s][$j], $result_arrows['right'])){
                    echo "<div class='square-down'>".$result[$s][$j]."</div>";
                }elseif(in_array($result[$s][$j], $result_arrows['up'])){
                    echo "<div class='square-right'>".$result[$s][$j]."</div>";
                }elseif(in_array($result[$s][$j], $result_arrows['down'])){
                    echo "<div class='square-left'>".$result[$s][$j]."</div>";
                }
            }
                if($j == 1){
                    echo '<br>';
            }
        }
    }
}
