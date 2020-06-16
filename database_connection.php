<?php
//database_connection.php
include("copy_environment.php");
$connect = new PDO("mysql:host=localhost;dbname=".$_ENV["DB_DATABASE"], $_ENV["DB_USERNAME"], $_ENV["DB_PASSWORD"]);

session_start();

$_SESSION["user_id"] = "1";
