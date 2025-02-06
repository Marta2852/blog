<?php

require "Validator.php";

$pageTitle = "Edit";
$config = require("config.php");
$db = new Database($config["database"]);

if (!isset($_GET["id"])) {
    header("Location: /"); 
    exit();
}

$postID = $_GET["id"];

$post = $db->query("SELECT * FROM posts WHERE id = ?", [$postID])->fetch();

if (!$post) {
    header("Location: /");
    exit();
}

$content = $post["content"];
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $content = trim($_POST["content"] ?? ""); 

    if (!Validator::string($content, max: 50)) {
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm!";
    }

    if (empty($errors)) {
        $sql = "UPDATE posts SET content = :content WHERE id = :id";
        $db->query($sql, ["content" => $content, "id" => $postID]);

        header("Location: show?id=" . $postID);
        exit();
    }
}

require "views/posts/edit.view.php";