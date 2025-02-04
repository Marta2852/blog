<?php

$pageTitle = "CREATE";

$config = require("config.php");

// Create a DB instance
$db = new Database($config["database"]);

$errors = [];

// Check form was submitted w/POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if 'content' field is set, if it's empty, or if it exceeds 50 characters
    if (!isset($_POST["content"]) || strlen($_POST["content"]) == 0 || strlen($_POST["content"]) > 50) {
        // Add an error for content if any of the conditions are met
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }


        // Directly use content without escaping
        $sql = "INSERT INTO posts (content) VALUES (:content)";
        $params = ["content" => $_POST["content"]];

        // Execute query
        $db->query($sql, $params);

        // Redirect to main page after saving
        header("Location: /");
        exit();
    } else {
        $error = "Content cannot be empty!";
    }


require "views/posts/create.view.php";
