<?php

class Database {
    //execute vai query

    private $pdo;

    public function __construct()
    {
        $connection_string = "mysql:host=localhost;dbname=blog_klavins;user=root;password=;charset=utf8mb4";
        $this->pdo = new PDO($connection_string);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function execute($query_string) {
        
        echo "<h1> I HAVE COVID25 </h1>";

        //Sagatabot SQL izpildei
        $query =$this->pdo->prepare($query_string);
        //Izpildit SQL
        $query->execute();
        //atgriezy rezultatus
        return $query;
    }
}