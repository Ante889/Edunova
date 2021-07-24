<?php


class database {

    private $host = 'localhost';
    private $db = 'summerproject';
    private $user = 'root';
    private $password = '';
    public $connection;
     

    public function __construct(){
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=UTF8";
        $this ->connection = new PDO($dsn, $this->user, $this->password);
        
    }

    public function Insert($tableName,$rowNames,$values){
        $rows="";
        $questionMark='';
        foreach($rowNames as $row){
            $rows = $rows . $row. ",";
            $questionMark = $questionMark . "?,";
        }
        $rows= substr($rows, 0,-1);
        $questionMark= substr($questionMark, 0,-1);

        $sql= "INSERT into $tableName ($rows) values ($questionMark)";
        $statement = $this -> connection -> prepare($sql);
        $statement->execute($values);
        
        if (!$statement) {
            print_r($this ->connection->errorInfo());
        }
    }
    
    //U $values na zadnjem mjestu stavljam id za where 
    public function Update($tableName,$rowNames,$values){
        $rows="";
        foreach($rowNames as $row){
            $rows = $rows . $row."=?,";
        }
        $rows= substr($rows, 0,-1);

        $sql= "UPDATE $tableName SET $rows WHERE id=?";
        $statement = $this -> connection -> prepare($sql);
        $statement->execute($values);
        
        if (!$statement) {
            print_r($this ->connection->errorInfo());
        }
    }

    public function Delete($tableName,$values){

        $sql= "DELETE FROM $tableName WHERE id=?";
        $statement = $this -> connection -> prepare($sql);
        $statement->execute($values);
        
        if (!$statement) {
            print_r($this ->connection->errorInfo());
        }
    }

    //ako želiš povuci sve iz baze ostavi where prazno 
    public function Select($tableName,$rowNames,array $where=null, array $values=null){

        $rows="";
        foreach($rowNames as $row){
            $rows = $rows . $row.",";
        }
        $rows= substr($rows, 0,-1);

        $whereArray="";
        foreach($where as $row){
            $whereArray = $whereArray . $row."=?,";
        }
        $whereArray= substr($whereArray, 0,-1);
        if($where != null){
        $sql= "SELECT $rows FROM $tableName WHERE $whereArray";
        $statement = $this -> connection -> prepare($sql);
        $statement->execute($values);
        return $result = $statement->fetchall();
        
        if (!$statement) {
            print_r($this ->connection->errorInfo());
        }
    }else{
        $sql= "SELECT $rows FROM $tableName";
        $statement = $this -> connection -> prepare($sql);
        $statement->execute();
        return $result = $statement->fetchall();
        
        if (!$statement) {
            print_r($this ->connection->errorInfo());
        }

    }
    }

}

$Db = new Database;


?>