<?php

$sql = "SELECT * FROM posts";
$params = [];

if (isset($_GET["search_query"]) && $_GET["search_query"] != "") {
    // Search logic
    $search_query = "%" . $_GET["search_query"] . "%";
    $sql .= " WHERE content LIKE :search_query";
    $params = ["search_query" => $search_query];
}

$posts = $db->query($sql, $params)->fetchAll();
$pageTitle = "Blogs";

require "views/posts/index.view.php"; 
