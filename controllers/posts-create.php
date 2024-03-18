<?php
require "./Database.php";
$config = require("./config.php");
//dd($_SERVER);
$params = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // dd("Pos");
    $query = "INSERT INTO posts (title, category_id) 
              VALUES (:title, :category_id);";
}

// if (isset($_GET["title"]) && $_GET["title"] != "" && isset($_GET["category-id"]) && $_GET["category-id"] != "") {
//     $post_title = $_GET["id"];    
//     $query .= " ("", 2)";
//     $params = [":id" => $id];
// }

// $db = new Database($config);
// $posts = $db
//             ->execute($query, $params)
//             ->fetchAll();
$title = "Create stuff";
require "views/posts-create.view.php";