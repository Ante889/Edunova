<?php



class Register{

    public $name;
    public $lastname;
    public $email;
    public $password;
    public $confirm_password;
    public $errors=[
        'name' => '',
        'lastname'=>'',
        'email' => '',
        'password' => ''
    ];

    
    public function __construct(){
        $this->name = $_POST["Firstname"];
        $this->lastname = $_POST["Lastname"];
        $this->email = $_POST["Email"];
        $this->password = $_POST["Password"];
        $this->confirm_password = $_POST["Confirm-Password"];
        $this -> CheckErrors();
        
    }

    public function CheckErrors(){

        global $Db;
        $rowNames = ['*'];
        $where = ['email'];
        $values = [$this->email];
        $emailExists = $Db-> Select('users',$rowNames,$where,$values);
        
        //Name
        if(empty($this-> name)){
            $this->errors['name']= "Canno't be empty";
        }
        //Lastname
        elseif(empty($this-> lastname)){
            $this->errors['lastname']= "Canno't be empty";
        }
        //Email
        elseif(empty($this-> email)){
            $this->errors['email']= "Canno't be empty"; 
        }elseif(count($emailExists) != 0){
            $this->errors['email']= "Email exists"; 
        }
        //Password
        elseif(empty($this-> password)){
            $this->errors['password']= "Canno't be empty"; 
        }
        elseif($this -> password != $this ->confirm_password){
            $this->errors['password']= "Passwords must be the same"; 
        }
        elseif(strlen($this -> password)<=5){
            $this->errors['password']= "Minimum 6 characters"; 
        }else{
            $this-> createUser();
        }

        print_r($this->errors);
        

    }

    public function CreateUser(){
        global $Db;
        $rowNames = ['name','lastname','role','email','password'];
        $values = [$this->name,$this->lastname,'user',$this->email,$this->password,];
        $Db-> Insert('users',$rowNames,$values);
        echo "Napravljen user <br>";
    }

}

$RegisterClass= New Register;