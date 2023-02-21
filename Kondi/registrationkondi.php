<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymRoll regisztráció</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>

    <script src="ervenyesseg.js" defer></script>

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

        .form-regisztracio {
            max-width: 450px;
            padding: 50px;
            align-items: center;
        }


        .form-regisztracio .form-floating:focus-within {
            z-index: 2;
        }

        .form-regisztracio input[type="email"] {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;

        }

        .form-regisztracio input[type="password"] {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .form-regisztracio input[type="text"] {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
    </style>
</head>

<body>
    <div class="col">

    </div>

    <div class="form-regisztracio w-100 auto text-center rounded-4">
        <form action="registration_conf.php" method="post" id="regisztracio" novalidate>
            <h3 class="mb-4 fw-normal">Legyél még ma tagja a GymRoll közösségnek!</h3>
            <h4>Regisztrálj és tedd meg az első lépést az álomformád eléréshez!</h4>
            <div class="form-floating">
                <input type="text" class="form-control" placeholder="Nagy" name="vnev" id="BeviteliVnev" required>
                <label for="BeviteliVnev">Vezetéknév</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" placeholder="Sándor" name="knev" id="BeviteliKnev" required>
                <label for="BeviteliKnev">Keresztnév</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" placeholder="valaki@valami.com" name="email" id="BeviteliEmail" required>
                <label for="BeviteliEmail">Email-cím</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="BeviteliJelszo" name="password" placeholder="Jelszó" required>
                <label for="BeviteliJelszo">Jelszó</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="UjraJelszo" name="password_verification" placeholder="Jelszó újra" required>
                <label for="UjraJelszo">Kérlek írd be újra a jelszavad</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Regisztráció</button>
            <p class="mt-3">Van már felhasználói fiókod? <a href="loginkondi.php"> <br> Jelentkezz be!</a></p>
        </form>
    </div>
    <div class="col">

    </div>




    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>

</body>

</html>