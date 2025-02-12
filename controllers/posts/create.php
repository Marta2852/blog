<?php

require "Validator.php";

$pageTitle = "Create";
$config = require("config.php");
$db = new Database($config["database"]);

$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!Validator::string($_POST["content"], max: 50)) {
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }

    if (empty($errors)) {
        $sql = "INSERT INTO posts (content) VALUES (:content)";
        $params = ["content" => $_POST["content"]];

        $db->query($sql, $params);

        header("Location: /");
        exit();
    }
}

require "views/posts/create.view.php";
