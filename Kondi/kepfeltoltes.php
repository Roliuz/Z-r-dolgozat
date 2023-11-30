<?php
session_start();
if (isset($_SESSION["user_id"])) {


    if (isset($_POST["submit"])) {
        $utvonal = "uploads/";
        $feltoltottfajl = $_FILES["feltoltes"]["name"];
        $cel_fajl = $utvonal . basename($feltoltottfajl);
        $feltoltesertek = 1;
        $kepTipus = strtolower(pathinfo($cel_fajl, PATHINFO_EXTENSION));
        if (isset($_POST["submit"])) {
            $ellenoriz = getimagesize($_FILES["feltoltes"]["tmp_name"]);
            if ($ellenoriz !== false) {
                echo "Ez a fájl egy kép" . $ellenoriz["mime"] . ". ";
                $feltoltesertek = 1;
            } else {
                echo "A fájl nem egy kép.";
                $feltoltesertek = 0;
            }
        }


        if (file_exists($cel_fajl)) {
            echo "A fájl már létezik.";
            $feltoltesertek = 0;
        }


        if ($kepTipus != "jpg" && $kepTipus != "jpeg" && $kepTipus != "png") {
            echo "Csak 'jpg', 'jpeg' és 'png' típusú fájlok feltölthetők!";
            $feltoltesertek = 0;
        }
        if ($feltoltesertek == 0) {
            echo "Hiba történt a fájl feltöltése közben.";
        } else {

            if (move_uploaded_file($_FILES["feltoltes"]["tmp_name"], $cel_fajl)) {
                require __DIR__ . "/registration_database.php";
                $user_id = $_SESSION["user_id"];
                $sql = "UPDATE felhasznalok SET profilkep = '$feltoltottfajl' WHERE felhasznalo_ID = $user_id";
                header("Location: profil_frissit.php");
                if (mysqli_query($mysqli, $sql)) {
                    echo "Az adatok sikeresen beillesztve az adatbázisba.";
                }
            } else {
                echo "Hiba a fájl feltöltése közben.";
            }
        }
    }
} else {
    // Felhasználó nincs bejelentkezve, átirányítás a bejelentkező oldalra
    header("Location: loginkondi.php");
    exit;
}
