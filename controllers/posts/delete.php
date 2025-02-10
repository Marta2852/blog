<?php

require "Validator.php";  // Assuming you have the Validator class
$config = require("config.php");
$db = new Database($config["database"]);

// Only proceed if the request method is POST (to prevent unauthorized access)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $postID = $_POST["id"] ?? null;  // Retrieve the ID from the form submission

    // Validate that the ID is a number (using the Validator class)
    if (!Validator::number($postID, 1)) {
        // If the ID is invalid, redirect back to the main page
        header("Location: /");
        exit();
    }

    // SQL query to delete the post by ID
    $sql = "DELETE FROM posts WHERE id = :id";
    $db->query($sql, ["id" => $postID]);  // Execute the query

    // Redirect to the main page after deleting the post
    header("Location: /");
    exit();
} else {
    // If it's a GET request, simply redirect to the main page to prevent unauthorized access
    header("Location: /");
    exit();
}
