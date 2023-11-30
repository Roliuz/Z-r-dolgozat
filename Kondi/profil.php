<!doctype html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />


</head>
<?php
session_start();
if (isset($_SESSION["user_id"])) {
    // Felhasználó be van jelentkezve
} else {
    // Felhasználó nincs bejelentkezve, átirányítás a bejelentkező oldalra
    header("Location: loginkondi.php");
    exit;
}
require __DIR__ . "/webshop/functions.php";
$pdo = connect_mysql();
$lekerdez = $pdo->prepare("SELECT vezeteknev, keresztnev, email, telefonszam, varos, leiras FROM felhasznalok WHERE felhasznalo_ID = ?");
$lekerdez->execute(array($_SESSION["user_id"]));

$row = $lekerdez->fetch(PDO::FETCH_ASSOC);
$vezeteknev = $row["vezeteknev"];
$keresztnev = $row["keresztnev"];
$email = $row["email"];
$telefonszam = $row["telefonszam"];
$varos = $row["varos"];
$leiras = $row["leiras"];


$user_id = $_SESSION["user_id"];
$keplekerdez = $pdo->prepare("SELECT * FROM felhasznalok WHERE felhasznalo_ID = :user_id");
$keplekerdez->bindParam(':user_id', $user_id);
$keplekerdez->execute();


$profilkep = $keplekerdez->fetchAll(PDO::FETCH_ASSOC);

?>

<body>
    <style>
        body {
            font-family: Bahnschrift SemiBold;
        }
    </style>

    5


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>