<?php

require "functions.php";
require "Database.php";

$db = new Database();
$posts = $db->query("SELECT * FROM posts");

echo "<ul>";
foreach ($posts as $post) {
    echo "<li>" . $post['content'] . "</li>";
}
echo "</ul>";



?>