<?php

class login 
{
    public $id;
    public $Email;
    public $Password;
    public $is_login;

    function __construct(){
    }

    function Login($Email, $Password){
    }
    
    function Check_email_and_password($Email,$Password){

        global $Database;
        $Email = $Database -> escape($Email);
        
        $sql = "SELECT * FROM users WHERE email = '$Email'";
        $result=$Database -> query($sql);
        if(empty($result)){
            return false;
        }else{
        while($row= $result -> fetch_assoc()){
             $Hash_Pass= $row["password"];
        }
        if(password_verify($Password,$Hash_Pass)){
            return true; 
        }else{
           return false;
        }
    }
    }
}



$Login = new login();

?>