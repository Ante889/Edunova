<?php


class register
{
    function register_user($Username, $Email, $Password, $Confirm_password){

        $Errors = array(
            'Password' => '',
            'Email' => '',
            'Empty' => ''
        );

        if($Confirm_password != $Password){
            $Errors['Password'] = "Passwords doesn't match";
        }elseif(strlen($Password) < 6){
            $Errors['Password'] = "Min 6 characters";
        }elseif(!$this -> user_exists($Username, $Email)){
            $Errors['Email'] = "Email or username exsists";
        }elseif(empty($Username) || empty($Password) || empty($Email) || empty($Confirm_password)){
            $Errors['Empty'] = "Cannot be empty";
        }else{
            $this -> insert_into_database($Username,$Email,$Password);
        }
        return $Errors;
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