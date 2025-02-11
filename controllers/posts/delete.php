<?php

require "Validator.php";  
$config = require("config.php");
$db = new Database($config["database"]);

// Make sure the ID is coming from the POST request
$postID = $_POST["id"] ?? null;

// Validate the ID to ensure it's a valid number
if (!Validator::number($postID, 1)) {
    // If the ID is not valid, redirect to the home page or list of posts
    header("Location: /");
    exit();
}

// Prepare the SQL query to delete the post
$sql = "DELETE FROM posts WHERE id = :id";
$db->query($sql, ["id" => $postID]);  

// Redirect to the main page (index) after deletion
header("Location: /");  // Adjust this URL based on your routing (main page)
exit();
