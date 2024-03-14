<?php

require "functions.php";

$url_array = parse_url($_SERVER["REQUEST_URI"]);
$url = $url_array["path"];
//dd(parse_url($_SERVER["REQUEST_URI"]));

if ($url == "/") {
    require "controllers/index.php";
}
elseif ($url == "/about") {
    require "controllers/about.php";
}
elseif ($url == "/story") {
    require "controllers/story.php";
} else {
    http_response_code(404);
    require "controllers/404.php";
}

?>