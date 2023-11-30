<!doctype html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil szerkesztés</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../CSS/profil_frissit.css">


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


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pdo = connect_mysql();

    $vezeteknev = $_POST["vezeteknev"];
    $keresztnev = $_POST["keresztnev"];
    $email = $_POST["email"];
    $telefonszam = $_POST["telefonszam"];
    $varos = $_POST["varos"];
    $leiras = $_POST["leiras"];
    if (empty($_POST["vezeteknev"])) {
        die("A vezetéknév szükséges paraméter!");
    } elseif (empty($_POST["keresztnev"])) {
        die("A keresztnév szükséges paraméter!");
    } elseif (empty($_POST["email"])) {
        die("Az email szükséges paraméter!");
    }
    $lekerdez = $pdo->prepare("UPDATE felhasznalok SET vezeteknev = ?, keresztnev = ?, email = ?, telefonszam = ?, varos = ?, leiras = ? WHERE felhasznalo_ID = ?");
    $lekerdez->execute(array($vezeteknev, $keresztnev, $email, $telefonszam, $varos, $leiras, $_SESSION["user_id"]));

    header("Location: profil.php");
    exit();
}
$user_id = $_SESSION["user_id"];
$keplekerdez = $pdo->prepare("SELECT * FROM felhasznalok WHERE felhasznalo_ID = :user_id");
$keplekerdez->bindParam(':user_id', $user_id);
$keplekerdez->execute();


$profilkep = $keplekerdez->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">


                <body>
                    <style>
                        body {
                            font-family: Bahnschrift SemiBold;
                        }
                    </style>

                    <div class="row gutters-sm mt-3">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <form action="kepfeltoltes.php" method="post" enctype="multipart/form-data">
                                            <?php foreach ($profilkep as $profilkepek) : ?>
                                                <img src="uploads/<?= $profilkepek["profilkep"] ?>" alt="" class="rounded-circle" width="150">
                                            <?php endforeach; ?>



                                            <label for="feltoltes" class="form-label">Válassz egy képet a gépedről.</label>

                                            <input type="file" name="feltoltes" id="feltoltes" class="form-control">


                                            <input type="submit" name="submit" class="btn btn-outline-success my-3">Kép feltöltése</button>

                                        </form>


                                        <div class="mt-3">
                                            <h4><?php echo $vezeteknev, " ", $keresztnev ?></h4>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <form method="post" action="">
                                        <div class="form-group">
                                            <label for="vezeteknev">Vezetéknév:</label>
                                            <input type="text" class="form-control" id="vezeteknev" name="vezeteknev" value="<?php echo $vezeteknev; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="keresztnev">Keresztnév:</label>
                                            <input type="text" class="form-control" id="keresztnev" name="keresztnev" value="<?php echo $keresztnev; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">E-mail cím:</label>
                                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="telefonszam">Telefonszám:</label>
                                            <input type="text" class="form-control" id="telefonszam" name="telefonszam" value="<?php echo $telefonszam; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="varos">Város:</label>
                                            <input type="text" class="form-control" id="varos" name="varos" value="<?php echo $varos; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="leiras">Rövid bemutatkozás:</label>
                                            <textarea class="form-control" id="leiras" name="leiras"><?php echo $leiras; ?></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary my-3">Mentés</button>
                                    </form>



                                </div>
                            </div>
                        </div>

                    </div>




                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
                </body>

</html>