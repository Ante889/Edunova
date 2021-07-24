<?php


class database {

    private $host = 'localhost';
    private $db = 'summerproject';
    private $user = 'root';
    private $password = '';
     

    public function __construct(){
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=UTF8";
        try {
            $pdo = new PDO($dsn, $this->user, $this->password);
        
            if ($pdo) {
                echo "Connected to the $this->db database successfully!";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

$Db = new Database;


?>