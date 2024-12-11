<?php

class Database{
    public function query(){
        // data source name
        $dsn = "mysql:host=localhost;port=3306;user=root;password=;dbname=blog;charset=utf8mb4";

        //PHP data object
        $pdo = new PDO($dsn); 

        $statement = $pdo->prepare("SELECT * FROM posts");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>