<?php
require "./Database.php";
$config = require("./config.php");
//dd($_SERVER);
$db = new Database($config);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // dd("Pos");
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

// if (isset($_GET["title"]) && $_GET["title"] != "" && isset($_GET["category-id"]) && $_GET["category-id"] != "") {
//     $post_title = $_GET["id"];    
//     $query .= " ("", 2)";
//     $params = [":id" => $id];
// }



$title = "Create stuff";
require "views/posts-create.view.php";