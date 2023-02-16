
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/footballreg.css">
    <title>Labdarúgás regisztráció</title>
</head>
<body>
    <div class="container">
        <div class="tartalom">
            
            <h3>Üdvözlöm!</h3>
            <p>Kérem töltse ki az alábbi mezőket!</p>
            <p>Regisztrációjával többféle exklúzív programon vehet részt, illetve a jegyek 
                beszerzését is hamarabb teheti meg.
            </p>
            <div class="mezok">
                <form action="../PHP/footballreg.php" method="post">

                

            <p>Vezetéknév:
            <input type="text" name="vnev" placeholder="Kérem írja be a vezetéknevét!" class="box" required><br></p>

            <p>Keresztnév:
            <input type="text" name="knev" placeholder="Kérem írja be a keresztnevét!" class="box" required><br></p>

            <p>Jelszó:
            <input type="password" name="pass" placeholder="Kérem írjon be egy jelszót!" class="box" required><br></p>

            <p>Jelszó ismét:
            <input type="password" name="repass" placeholder="Kérem írja be ugyanazt a jelszót!" class="box" required><br></p>

            <p>E-mail cím:
            <input type="email" name="email" placeholder="Kérem írja be a e-mail címét!" class="box" required><br></p>
            
            <p>Irányítószám:
            <input type="number" name="irszam" placeholder="Kérem írja be a irányítószámát!" class="box" required><br></p>

            <p>Város:
            <input type="text" name="varos" placeholder="Kérem írja be a jelenlegi lakóhelyét!" class="box" required><br></p>

            <p>Utca:
            <input type="text" name="utca" placeholder="Kérem írja be a lakóhelyének utcáját!" class="box" required><br></p>

            <p>Házszám:
            <input type="number" name="hszam" placeholder="Kérem írja be a házszámát!" class="box" required><br></p>

            <!--<p>Focizott-e valaha? <br>
            Igen: <input type="checkbox" name="valasz" >
            Nem: <input type="checkbox" name="valasz" ><br> </p>-->

            <p>Ha focizott mennyit? (év):
            <input type="text" name="asd" placeholder="" class="box" ><br></p>


            <p>Esetleg van már felhasználói fiókod? <a href="loginfootball.php">Jelentkezz be!</a></p>
            <input type="submit" value="Regisztráció" name="submit" class="regbutton" formaction="../PHP/footballreg.php">
            <!--<a href="/PHP/logout.php" class="register"> Regisztráció</a>-->
                </form>
        </div>
        </div>
    </div>
</body>
</html>