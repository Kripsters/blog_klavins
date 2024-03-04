<?php

// Šis fails ir, lai izvadītu datus no datubāzes uz
// lapu

require "functions.php";
require "Database.php";

$config = require("config.php");
//include


$query = "SELECT * FROM posts";
if (isset($_GET["id"])) {
    if ($_GET["id"] == NULL) {
        $query = "SELECT * FROM posts";
    } else {
    $id = $_GET["id"];
    $query = "SELECT * FROM posts WHERE id=$id";
}}

$db = new Database($config);
$posts = $db
            ->execute($query)
            ->fetchAll();


echo "<form>"; 
echo "<input name='id'/>"; 
echo "<button>Submit</button>"; 
echo "</form>"; 



echo "<h1> Posts </h1>";
echo "<h2> I HAVE COVID25 </h2>";
echo "<ul>";
foreach ($posts as $post) {
    echo "<li>".$post["title"]."</li>";
}
echo "</ul>";