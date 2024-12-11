<?php

require "functions.php";
require "Database.php";

$db = new Database();
$posts = $db->query();

echo "<ul>";
foreach ($posts as $post) {
    echo "<li>" . $post['content'] . "</li>";
}
echo "</ul>";



?>