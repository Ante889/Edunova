<?php


class register
{
    function register_user($Username, $Email, $Password){

        

    }

    function insert_into_database($Username, $Email, $Password){

        global $Database;
        $Username = $Database -> Escape($Username);
        $Email = $Database -> Escape($Email);
        $Password = $Database -> Escape($Password);
        $sql = "INSERT INTO users (username,email,password) values ('$Username','$Email','$Password')";
        $Database-> Query($sql);

    }
    function user_exists($Username, $Email){

        global $Database;
        $Username = $Database -> Escape($Username);
        $Email = $Database -> Escape($Email);
        $sql = "SELECT * FROM users WHERE username= '$Username' or email = '$Email'";
        $result = $Database-> Query($sql);
        $Fetch = $result -> fetch_assoc();
        if(Empty($Fetch)){
        return true;
        }

        

    }
}

$Register=new register;

?>