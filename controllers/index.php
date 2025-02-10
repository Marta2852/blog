<?php

$sql = "SELECT * FROM posts";
$params = [];

// Check if the search query exists and is not empty
if (isset($_GET["search_query"]) && !empty($_GET["search_query"])) {
  // Sanitize and prepare the search query
  $search_query = "%" . $_GET["search_query"] . "%";
  $sql .= " WHERE content LIKE :search_query"; // Use prepared statements
  $params = ["search_query" => $search_query]; // Bind parameter
}

// Execute the query and fetch results
$posts = $db->query($sql, $params)->fetchAll();

$pageTitle = "Blogi";

// Load the index view with the fetched posts
require "views/index.view.php";
