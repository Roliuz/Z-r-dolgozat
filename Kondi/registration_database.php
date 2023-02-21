<?php

$host = "localhost";
$database = "kondi";
$username = "admin";
$password  = "Admin123";

$mysqli = new mysqli($host, $username, $password, $database);


if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->error);
}
return $mysqli;
