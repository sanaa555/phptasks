<?php

class DB
{
    protected $dbType, $dbName, $host, $connection, $userName, $userPassword;
    function __construct($dbType, $dbName, $host, $userName, $userPassword)
    {
        $this->dbType = $dbType;
        $this->dbName = $dbName;
        $this->host = $host;
        $this->userName = $userName;
        $this->userPassword = $userPassword;
        $this->connection = new PDO("$this->dbType:host=$this->host;dbname=$this->dbName", $this->userName, $this->userPassword);
    }


    function index($table)  // select all data from table users
    {
        $query = "select * from $table";  // string  ==> sql
        $sqlQuery = $this->connection->prepare($query);
        $sqlQuery->execute();
        $result = $sqlQuery->fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        } else {
            echo "Data Empty";
        }
    }

    function insert()
    {
        $query = 'insert into users (name, email, password) values ("Amr","Amr@gmail.com","12345")';
        return $sqlQuery = $this->connection->query($query);

    }
}


$database = new DB(dbType: "mysql", dbName: "day5_php", userName: "root", userPassword: "", host: "localhost");
// var_dump($database->insert());
// var_dump($database);
// $database->index("users");