<?php

echo "Hello Cruel World";

$connection_string = "mysql:host=localhost;dbname=blog_klavins;user=root;password=;charset=utf8mb4";
$pdo = new PDO($connection_string);

//Sagatabot SQL izpildei
$query = $pdo->prepare("SELECT * FROM posts");
//Izpildit SQL
$query->execute();
//Dabut rezultatus
$posts = $query->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
var_dump($posts);
echo "</pre>";