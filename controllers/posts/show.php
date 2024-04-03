<?php

$title = "Show one";
require_once("Database.php");

$config = require("config.php");
$db = new Database($config);

$query = "SELECT * FROM posts WHERE id=:id";
// dd($_GET["id"]);
$params = [":id"  => $_GET["id"]];

$post = $db->execute($query, $params)->fetch();


require "views/posts/show.view.php";
