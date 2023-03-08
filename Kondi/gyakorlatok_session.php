<!doctype html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testépítés főoldal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../CSS/gyakorlatok.css">


</head>

<body>
    <style>
        #signin:hover {
            background-color: lightgray;
        }

        .bg-dark .row .col .card:hover {
            background-color: red;
        }

        .fizetes {
            background-image: url("../Pic/kondihatter.jpg");


            filter: blur(8px);
            -webkit-filter: blur(8px);

            height: 100%;

            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }
    </style>

    <?php

    if (isset($felhasznalo)) {

        function function_alert($message)
        {

            echo "<script>alert('$message');</script>";
        }

        function_alert("Sikeres bejelentkezés! Üdvözöllek " . htmlspecialchars($felhasznalo["keresztnev"]));
    }
    ?>


    <nav class="navbar navbar-expand-lg  mb-4" style="background-color: transparent">
        <div class="container">
            <a class="navbar-brand fs-5  text-black mt-3" href="#">GymRoll</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-light rounded"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav fs-5" style="margin-left: 180px">
                    <li class="nav-item">
                        <a class="nav-link active me-5 ms-3 mt-3 text-black " aria-current="page" href="#">Főoldal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3  mt-3 text-black" href="rolunk_session.php">Rólunk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5 ms-lg-3 mt-lg-3  text-black" style="width: 211px" href="kaloriakalk_session.php">Kalória-kalkulátor</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link me-3 ms-2  mt-3 text-black" href="gyakorlatok_session.php">Gyakorlatok</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3 ms-3 mt-3 text-black" href="edzoink_session.php">Edzőink</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  ms-3 mt-3 text-black" href="webshop_session.php">Webshop</a>
                    </li>
                    <form class="d-flex " style="margin-left: 100px;" role="signin">

                        <a href="logout_session.php"><button class="btn btn-outline-success text-black mt-3" id="signin" type="button" style=" color:black; border-color:black;">Kijelentkezés</button></a>
                    </form>
                </ul>
            </div>
        </div>
    </nav>

    <div class="bg-dark mb-0" style="margin-bottom: -1rem;">
        <div class="container">
            <table class="table table-borderless" style="height: 400px;">
                <tbody>
                    <td class="align-middle bg-dark text-white" style="max-width: 400px;">
                        <h1>Gyakorlatok</h1>
                    </td>
                    <td style="max-width: 400px;" class="align-middle bg-dark text-white ">aofdohfnsdkfl opj dfjogjf jgfdjkgjkfdgk ljlkg jlkdxfjflkg jd klfjgkldjkl gjlkdfjgkljdkjgkfdjgkldjlk gjlkej lkfdjlkjlk gkdfjg lkdfjglk jdflk gjfdjg lkdfjg kjfjgkjkgj ogjoperjgopjeropjopewj gopjeroprjgperjgoperpojgopjergjpjdf opgjoperjgopjdfgjdopjlégjdlégjfjjgopdxjgpoxd</td>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="card border border-0 text-white mt-4 mb-3">

                <div class="kartyahatter"><img src="../Pic/mellizom.png" class="card-img img-fluid " alt="..."></div>
                <div class="card-img-overlay">
                    <h5 class="card-title text-center fs-1">Mellizom</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card border border-0 text-white mt-4 mb-3">

                <div class="kartyahatter"><img src="../Pic/vallizom.png" class="card-img img-fluid " alt="..."></div>
                <div class="card-img-overlay">
                    <h5 class="card-title text-center fs-1">Váll izom</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card border border-0 text-white mt-4 mb-3">

                <div class="kartyahatter"><img src="../Pic/hatizom.png" class="card-img img-fluid " alt="..."></div>
                <div class="card-img-overlay">
                    <h5 class="card-title text-center fs-1">Hát izom</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card border border-0 text-white mt-4 mb-3">

                <div class="kartyahatter"><img src="../Pic/bicepsz.png" class="card-img img-fluid " alt="..."></div>
                <div class="card-img-overlay">
                    <h5 class="card-title text-center fs-1">Bicepsz</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card border border-0 text-white mt-4 mb-3">

                <div class="kartyahatter"><img src="../Pic/tricepsz.png" class="card-img img-fluid " alt="..."></div>
                <div class="card-img-overlay">
                    <h5 class="card-title text-center fs-1">Tricepsz</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card border border-0 text-white mt-4 mb-3">

                <div class="kartyahatter"><img src="../Pic/combizom.png" class="card-img img-fluid " alt="..."></div>
                <div class="card-img-overlay">
                    <h5 class="card-title text-center fs-1">Láb izom</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div>
</body>

</html>