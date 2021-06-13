<?php

class Reset_password
{
    

    function Create_token($Email){

        global $Database;
        $sql = "SELECT * FROM users where email = '$Database->Escape($Email)'";
        $result = $Database -> query($sql);
        if(!empty($result)){
            $token = random_bytes(20);
            $token= var_dump(bin2hex($token));
            $sql= "INSERT INTO users (Reset_password_token) values ('$Database->escape($token)') where email = '$Database->Escape($Email)'"
        };
        }

    }
}


?>