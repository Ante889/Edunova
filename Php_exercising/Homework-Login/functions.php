<?php
Database();

function Database(){

    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = 'homeworklogin';

    $conn = mysqli_connect($host, $username, $password,$db_name);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }else{
        return $conn;
    }

}

?>