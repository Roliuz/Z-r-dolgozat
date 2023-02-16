<!doctype html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testépítés főoldal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />


</head>

<body>
    <style>
        #signin:hover {
            background-color: lightgray;
        }
    </style>

    <nav class="navbar navbar-expand-lg  " style="background-color: transparent">
        <div class="container">
            <a class="navbar-brand fs-5  text-black mt-3" href="#">GymRoll</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-light rounded"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav fs-5" style="margin-left: 180px">
                    <li class="nav-item">
                        <a class="nav-link active me-5 ms-3 mt-3 text-black " aria-current="page" href="kondifooldal.php">Főoldal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3  mt-3 text-black" href="rolunk.php">Rólunk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5 ms-lg-3 mt-lg-3  text-black" style="width: 211px" href="kaloriakalk.php">Kalória-kalkulátor</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link me-3 ms-2  mt-3 text-black" href="gyakorlatok.php">Gyakorlatok</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3 ms-3 mt-3 text-black" href="edzoink.php">Edzőink</a>
                    </li>
                    <form class="d-flex " style="margin-left: 200px;" role="signin">

                        <button class="btn btn-outline-success text-black mt-3" id="signin" type="submit" style="margin-left: 60px; color:black; border-color:black;   ">Bejelentkezés</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>