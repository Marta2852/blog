<?php

require "Validator.php";  
$config = require("config.php");
$db = new Database($config["database"]);

$postID = $_POST["id"] ?? null;

if (!Validator::number($postID, 1)) {
    header("Location: /");
    exit();
}

$sql = "DELETE FROM posts WHERE id = :id";
$db->query($sql, ["id" => $postID]);  

header("Location: /");
exit();
