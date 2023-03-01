    <!DOCTYPE html>
    <html>

    <?php

    $ervenytelen = false;


    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $mysqli = require __DIR__ . "/registration_database.php";

        $lekerdez = sprintf(                //lekérdezem, hogy van e az adatbázisban azonos adat
            "SELECT * FROM felhasznalok 
                        WHERE felhasznalonev= '%s'",
            $mysqli->real_escape_string($_POST["email"])
        );

        $eredmeny = $mysqli->query($lekerdez); //a query segítségével a program számára "érthetővé" teszem
        $felhasznalo = $eredmeny->fetch_assoc();

        if ($felhasznalo) {
            if (password_verify($_POST['password'], $felhasznalo["password"])) { //a password_verify segít lefordítani a tiktosított jelszót,és ha megegyezik az adatbázisban tárolt értékkel akkor igaz értékkel tér vissza



                //$_SESSION["user_id"] = $felhasznalo["id"];
                header("Location: login_session.php");
                exit;
            }
        }
        $ervenytelen = true;
    }

    ?>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            form {
                border: 3px solid #f1f1f1;
            }

            input[type=text],
            input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            button {
                background-color: #04AA6D;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            button:hover {
                opacity: 0.8;
            }

            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
            }

            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
            }

            img.avatar {
                width: 40%;
                border-radius: 50%;
            }

            .container {
                padding: 16px;
            }

            span.psw {
                float: right;
                padding-top: 16px;
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
                span.psw {
                    display: block;
                    float: none;
                }

                .cancelbtn {
                    width: 100%;
                }
            }
        </style>
    </head>

    <body>

        <h2>Login Form</h2>

        <form method="post">
            <div class="imgcontainer">
                <img src="img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Felhasználónév</b></label>
                <input type="text" placeholder="Írd be a felhasználóneved" name="felhasznalonev" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Írd be a jelszavad" name="password" required>

                <button type="submit">Login</button>

            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>

    </body>

    </html>