<?php
require "./Database.php";
$config = require("./config.php");
//dd($_SERVER);
$db = new Database($config);



//if ($_SERVER["REQUEST_METHOD"] == "POST" && trim($_POST["title"]) != "" && $_POST["category-id"] <= 3 && strlen($_POST["title"]) <= 255) {
    // dd("Pos");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];


    if(trim($_POST["title"]) == "") {
        $errors["title"] = "no title";
    }
    if(strlen($_POST["title"]) > 255) {
        $errors["title"] = "title too long (255char)";
    }
    if($_POST["cat_id"] >= 3) {
        $errors["cat_id"] = "wrong cat-id";
    }
    if (empty($errors)) {


    $query = "INSERT INTO posts (title, category_id) 
              VALUES (:title, :category_id);";
              $params = [
                  ":title" => $_POST["title"],
                  ":category_id" => $_POST["category-id"]
              ];
              $db->execute($query, $params);
              header("Location: /");
              die();
            }
} 




$title = "Create stuff";
require "views/posts/posts-create.view.php";