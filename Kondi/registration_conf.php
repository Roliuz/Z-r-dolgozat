<?php

if (empty($_POST["vnev"])) {
    die("Kérlek add meg a vezetéknevedet!"); //vezetéknév hiánya esetén
}
if (empty($_POST["knev"])) {
    die("Kérlek add meg a keresztnevedet!");  //keresztnév hiánya esetén
}
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {     //ellenőrzi, hogy valid(érvényes)-e az email cím
    die("Kérlek valós e-mail címet adj meg!");
}
if (strlen($_POST["password"] < 6)) {        //a jelszónak a karakterhosszúságát ellenőrzi 
    die("A jelszónak minimum 6 karakter hosszúnak kell lennie!");
}
if (!preg_match("/[a-z]/i", $_POST["password"])) {
    die("Egy betűnek kötelező szerepelnie a jelszóban!");
}
if (!preg_match("/[0-9]/i", $_POST["password"])) {
    die("Egy számnak kötelező szerepelnie jelszóban!");
}
if ($_POST["password"] !== $_POST["password_verification"]) {
    die("A két jelszónak egyeznie kell egymással!");
}

$password_titkosit = password_hash($_POST["password"], PASSWORD_DEFAULT); //jelszókódolás


$mysqli = require __DIR__ . "/registration_database.php"; //adatbázis php meghívása

$rogzites = "INSERT INTO felhasznalok(vezeteknev, keresztnev, jelszo, email) VALUES (?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($rogzites)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssss", $_POST["vnev"], $_POST["knev"], $password_titkosit, $_POST["email"]); //4s, hiszen 4 string típusú változóm van


if ($stmt->execute()) {
    echo "A regisztráció sikeres volt!";
    echo "
         
    <a href='loginkondi.php'> <br>Itt be tudsz jelentkezni.";
    exit;
} else {

    die("Hiba: " . $mysqli->error . $mysqli->errno); //hiba nem írja ki megfelelően (megbeszélni)
}
