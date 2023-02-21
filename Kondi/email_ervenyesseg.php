<?php

$mysqli = require __DIR__ . "/registration_database.php";

$lekerdez = sprintf(
    "SELECT * FROM felhasznalok WHERE email = '%s'",
    $mysqli->real_escape_string($_GET["email"])
);

$eredmeny = $mysqli->query($lekerdez);

$elerheto_e = $eredmeny->num_rows === 0;

header("Content-Type: application/json");

echo json_encode(["available" => $elerheto_e]);
