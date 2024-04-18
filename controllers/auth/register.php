<?php

guest();

$title = "Register";
require "./Database.php";
require "Validator.php";
$config = require("./config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    if(!Validator::email($_POST["email"])) {
        $errors["email"] = "Nepareizs epasts";
    }
    
    if(!Validator::password($_POST["password"])) {
        $errors["password"] = "Nepareiza paroles formats";
    }

    $query = "SELECT * FROM users WHERE email = :email";
    $params = [":email" => $_POST["email"]];
    $result = $db
    ->execute($query, $params)
    ->fetch();

    if ($result) {
        $errors["email"] = "Epasts jau aiznemts!";
    }

    if (empty($errors)) {
        $query = "INSERT INTO users (email, password)
        VALUES (:email, :password);";
        $params = [
            ":email" => $_POST["email"],
            ":password" => password_hash($_POST["password"], PASSWORD_BCRYPT)
        ];
        $db->execute($query, $params);

        $_SESSION["flash"] = "Tu esi pieteikts Armijā!";
        header("Location: /login");
        die();
    }
}

require "./views/auth/register.view.php";
?>