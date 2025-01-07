<?php

// Mērķis: izveidot blogu meklētāju.

require "functions.php";
require "Database.php";

$config = require("config.php");

echo "<h1>Blogs</h1>";
$db = new Database($config["database"]);

/*$comments = $db->query("SELECT * FROM comments")->fetchAll(PDO::FETCH_ASSOC);
$user = = $db->query("SELECT * FROM users WHERE user_id = $id")->fetch(PDO::FETCH_ASSOC);
$db->query("INSERT INTO posts");*/

$sql = "SELECT * FROM posts";
$params = [];
if (isset($_GET["search_query"]) && $_GET["search_query"] !="") {
    // Meklēšanas loģika
    // dd("SELECT * FROM posts WHERE content LIKE '%" . $_GET["search_query"] . "%';");
    $search_query = "%" . $_GET["search_query"] . "%";
    $sql .= " WHERE content LIKE :search_query;";
    $params = ["search_query" => $search_query];
}

$posts = $db->query($sql, $params)->fetchAll();

// Meklēšanas forma
// POST - maina datu bāzē saturu
// GET - atlasa datus
echo "<form>";
echo "<input name='search_query' />";
echo "<button>Meklēt</button>";
echo"</form>";

echo "<ul>";
foreach ($posts as $post) {
    echo "<li>" . $post['content'] . "</li>";
}
echo "</ul>";



?>