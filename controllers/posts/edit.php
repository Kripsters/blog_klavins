<?php
require "Validator.php";
require "Database.php";
$config = require("./config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];


    if(!Validator::string($_POST["title"], min:1, max:255)) {
        $errors["title"] = "no title or too long";
    }

    if(!Validator::number($_POST["cat_id"], min:1, max:3)) {
        $errors["cat_id"] = "wrong cat-id";
    }
    if (empty($errors)) {


    $query = "UPDATE posts 
              SET title = :title, category_id = :cat_id
              WHERE id = :id";
              $params = [
                  ":title" => $_POST["title"],
                  ":cat_id" => $_POST["cat_id"],
                  ":id" => $_POST["id"]
              ];
              $db->execute($query, $params);
              header("Location: /");
              die();
            }
} 


$query = "SELECT * FROM posts WHERE id=:id";
// dd($_GET["id"]);
$params = [":id"  => $_GET["id"]];

$post = $db->execute($query, $params)->fetch();

$title = "Editing";
require "views/posts/edit.view.php";