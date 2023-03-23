<?php

session_start();
include "functions.php"; //az adatbázis csatlakozása érdekében meghívom a functions.php-t
$pdo = connect_mysql();


$oldal = isset($_GET['oldal']) && file_exists($_GET['oldal'] . '.php') ? $_GET['oldal'] : 'home';

include $oldal . '.php';
