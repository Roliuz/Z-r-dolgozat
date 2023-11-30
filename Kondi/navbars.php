  <?php
    function navbar_session($cim)
    {
        echo <<<EOT
        <!DOCTYPE html>
    <html lang="hu">

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$cim</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Testépítés főoldal</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   

    </head>
    <nav class="navbar navbar-expand-lg bg-transparent ">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../Pic/logo.png" alt="" style="max-width: 50px;"> GymRoll</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <div class="navbar-nav mx-auto my-3 fs-5">

                <a class="nav-link text-dark mx-2" href="login_session.php">Főoldal</a>
                <a class="nav-link text-dark mx-2" href="rolunk_session.php">Rólunk</a>
                <a class="nav-link text-dark mx-2" href="kaloriakalk_session.php"> Kalkulátor</a>
                <a class="nav-link text-dark mx-2" href="gyakorlatok_session.php">Gyakorlatok</a>
                <a class="nav-link text-dark mx-2" href="edzoink_session.php">Edzőink</a>
                <a class="nav-link text-dark mx-2" href="webshop/index.php">Webshop</a>
                </a>

            </div>
            <a class="nav-link text-dark me-5 " href="profil.php"><i class="bi bi-person-circle fs-4"></i>

            <a href="logout_session.php"><button class="btn btn-outline-success text-black " id="signin" type="button" style=" color:black; border-color:black;">Kijelentkezés</button></a>
        </div>
    </div>
    </nav>
  EOT;
    }

    function navbar_normal($cim)
    {
        echo <<<EOT
        <!DOCTYPE html>
    <html lang="hu">

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$cim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    </head>
    <nav class="navbar navbar-expand-lg bg-transparent ">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../Pic/logo.png" alt="" style="max-width: 50px;"> GymRoll</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav mx-auto my-3 fs-5">

                <a class="nav-link text-dark mx-2" href="kondifooldal.php">Főoldal</a>
                <a class="nav-link text-dark mx-2" href="rolunk.php">Rólunk</a>
                <a class="nav-link text-dark mx-2" href="kaloriakalk.php"> Kalkulátor</a>
                <a class="nav-link text-dark mx-2" href="gyakorlatok.php">Gyakorlatok</a>
                <a class="nav-link text-dark mx-2" href="edzoink.php">Edzőink</a>
            </div>
            <a href="loginkondi.php"><button class="btn btn-outline-success text-black " id="signin" type="button" style=" color:black; border-color:black;">Bejelentkezés</button></a>
        </div>
    </div>
    </nav>
  EOT;
    }


    ?>