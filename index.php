<?php

require "functions.php";

// data source name
$dsn = "mysql:host=localhost;port=3306;user=root;password=;dbname=blog;charset=utf8mb4";

//PHP data object
$pdo = new PDO($dsn); 

$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

echo "<ul>";
foreach ($posts as $post) {
    echo "<li>" . $post['content'] . "</li>";
}
echo "</ul>";



?>