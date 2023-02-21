<?php

$ervenytelen = false;


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__ . "/registration_database.php";

    $lekerdez = sprintf(                //lekérdezem, hogy van e az adatbázisban azonos adat
        "SELECT * FROM felhasznalok 
                        WHERE email= '%s'",
        $mysqli->real_escape_string($_POST["email"])
    );

    $eredmeny = $mysqli->query($lekerdez); //a query segítségével a program számára "érthetővé" teszem
    $felhasznalo = $eredmeny->fetch_assoc();

    if ($felhasznalo) {
        if (password_verify($_POST['password'], $felhasznalo["jelszo"])) { //a password_verify segít lefordítani a tiktosított jelszót,és ha megegyezik az adatbázisban tárolt értékkel akkor igaz értékkel tér vissza

            session_start();

            session_regenerate_id();

            $_SESSION["user_id"] = $felhasznalo["felhasznalo_ID"];
            header("Location: login_session.php");
            exit;
        }
    }
    $ervenytelen = true;
}

?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymRoll Bejelentkezés</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .form-bejelentkezes {
            max-width: 400px;
            padding: 50px;
            align-items: center;
        }

        .form-bejelentkezes .form-floating:focus-within {
            z-index: 2;
        }

        .form-bejelentkezes input[type="email"] {
            margin-bottom: 0px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;

        }

        .form-bejelentkezes input[type="password"] {
            margin-bottom: 14px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
    </style>
</head>

<body class="text-center">

    <div class="col">

    </div>
    <div class="form-bejelentkezes w-100 auto text-center rounded-4">

        <?php if ($ervenytelen) : ?>
            <em>A bejelentkezés érvénytelen.</em>
        <?php endif; ?>
        <form method="post">

            <h3 class="mb-4 fw-normal">Kérlek jelentkezz be!</h3>
            <div class="form-floating">
                <input type="email" class="form-control" name="email" placeholder="valaki@valami.com" id="BeviteliEmail" value="<?php htmlspecialchars($_POST["email"] ?? "") ?>">
                <label for="BeviteliEmail">Email-cím</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="BeviteliJelszo" placeholder="Jelszó">
                <label for="BeviteliJelszo">Kérem írja be a jelszavát</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Bejelentkezés</button>
            <p class="mt-3">Nincsen még felhasználói fiókod? <a href="registrationkondi.php"> <br> Csinálj egyet most!</a></p>
        </form>
    </div>
    <div class="col">

    </div>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>