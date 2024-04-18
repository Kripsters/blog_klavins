<?php
guest();
require "./Database.php";
require "Validator.php";
$config = require("./config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    if(!Validator::string($_POST["email"], min:1, max:255)) {
        $errors["email"] = "invalid email";
    }
    
    if(!Validator::string($_POST["password"], min:1, max:255)) {
        $errors["password"] = "invalid password";
    }

    
    $query = "SELECT * FROM users WHERE email = :email";
    $params = [
        ":email" => $_POST["email"]
    ];
    $user = $db->execute($query, $params)->fetch();
    if (!$user || !password_verify($_POST["password"], $user["password"])) {
        $errors["email"] = "Kkas nav labi";
    }

    if (empty($errors)) {
        $_SESSION["user"] = true;
        $_SESSION["email"] = $_POST["email"];
        header("Location: /");
        die();
    }
}

$title = "Log in";
require "./views/auth/login.view.php";

unset($_SESSION["flash"]);
?>