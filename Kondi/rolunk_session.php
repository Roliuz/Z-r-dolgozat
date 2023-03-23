<!doctype html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testépítés főoldal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />


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

    include("session_check.php");

    ?>


    <nav class="navbar navbar-expand-lg mb-4 " style="background-color: transparent">
        <div class="container">
            <a class="navbar-brand fs-5  text-black mt-3" href="#">GymRoll</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-light rounded"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav fs-5" style="margin-left: 180px">
                    <li class="nav-item">
                        <a class="nav-link active me-5 ms-3 mt-3 text-black " aria-current="page" href="login_session.php">Főoldal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3  mt-3 text-black" href="#">Rólunk</a>
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
                        <a class="nav-link  ms-3 mt-3 text-black" href="webshop/webshop_session.php">Webshop</a>
                    </li>
                    <form class="d-flex " style="margin-left: 100px;" role="signin">

                        <a href="logout_session.php"><button class="btn btn-outline-success text-black mt-3" id="signin" type="button" style=" color:black; border-color:black;">Kijelentkezés</button></a>
                    </form>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-lg-3">
                <img src="../Pic/rolunkfoto1.png" alt="" style="max-width: 15rem;transform: scaleX(-1);" class="me-lg-3 ms-lg-3 img-fluid">
                <img src="../Pic/rolunkfoto2.png" alt="" style="max-width: 15rem;" class="mt-lg-5 img-fluid">
            </div>
            <div class="col my-lg-5 ms-lg-5">
                <h3> Üdvözöllek a GymRoll-ban.</h3>
                <p class="my-4">
                    Az ember néha amikor a tükörbe néz sajnos nincsen megelégedve magával. Ennek az oka lehet sok minden,
                    általában viszont sok ember a testével nincsen megelégedve. Ezek után elhatározzák, hogy el kezdenek konditerembe járni, esetleg elkezdenek egyesületekhez járni sportolni. Minden út egy célba vezet vissza, ami nem más mint a sport.
                </p>
                <p>
                    Konditermünkbe rengeteg féle színesített edzésmóddal várjuk kedves vendégeinket, hiszen egy idő után unalmas lehetnek csak a súlyzós edzések.
                    Személyi edzés elérhető mind kezdőknek, mind haladóknak. Célunk ezzel, hogy az ember az ne csak muszájból járjon le a konditerembe, hanem szeresse azt.
                </p>

            </div>
        </div>
    </div>


    <div class="row my-lg-4" style="background-color:#9B0000; height: 420px;">


        <div class="col text-light text-center my-lg-5" style="font-family:Century Gothic;">
            <h1>Klienseink</h1>
            <h4>A képeken látható a változás ügyfeleinken, a különböző időszakos programjainknak köszönhetően.</h4>
        </div>

        <div class="col ms-lg-5">
            <div id="carouselExampleDark" class="carousel carousel-dark slide w-50 my-lg-4 ms-lg-5">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>

                </div>
                <div class="carousel-inner ms-4">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="../Pic/transform1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <p class="text-bg-dark p-1">12 hetes tömegelő program</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="../Pic/transform2.jpg" class="d-block w-100 " alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <p class="text-bg-dark p-1">6 hetes erőnövelő program</p>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../Pic/transform3.jpg" class="d-block w-100 " alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <p class="text-bg-dark p-1">9 hetes szálkásító program</p>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../Pic/transform5.jpg" class="d-block w-100 " alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <p class="text-bg-dark p-1">12 hetes tömegelő program</p>

                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col">
                <h1 class="my-5" style="font-family: MS Gothic">Miért minket válassz?</h1>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col m-3 my-4 fs-5" style="font-family:Audiowide, sans-serif;">
                        Prémium minőség
                    </div>
                    <div class="col m-3 my-4 fs-5" style="font-family:Audiowide, sans-serif;">
                        Több mint 50 féle kondigép
                    </div>
                </div>
                <div class="row">
                    <div class="col m-3 my-4 fs-5" style="font-family:Audiowide, sans-serif;">
                        Úszómedence és szauna üzemel
                    </div>
                    <div class=" col m-3 my-4 fs-5" style="font-family:Audiowide, sans-serif;">
                        Szakértelem felsőfokon
                    </div>
                </div>
                <div class="row">
                    <div class="col m-3 my-4 fs-5" style="font-family:Audiowide, sans-serif;">
                        8 féle különböző edzésforma
                    </div>
                    <div class="col m-3 my-4 fs-5" style="font-family:Audiowide, sans-serif;">
                        Jó elhelyezkedés
                    </div>
                </div>
            </div>

            <div class="col ms-5">
                <img src="../Pic/oldalsokep.png" alt="" class="ms-5" style="max-width: 300px;">
            </div>
        </div>

    </div>
    <footer class="bg-dark  border-top py-5 text-light">

        <div class="container">

            <div class="row">
                <div class="col">
                    <p class="ft-bold text-info">Ügyfélszolgálat</p>
                    <p class="my-1 fw-bold"><a href="#" class="text-decoration-none text-secondary">GymRoll</a></p>
                    <p class="my-1"><a href="#" class="text-decoration-none text-secondary">5600 Békéscsaba</a></p>
                    <p class="my-1"><a href="mailto:info@webshop.hu" class="text-decoration-none text-secondary">GymRoll@gmail.com</a></p>
                    <p class="my-1"><a href="#" class="text-decoration-none text-secondary">+ 36 30 755 9817</a></p>
                </div>



                <div class="col">

                    <p class="ft-bold text-info">Információ</p>
                    <p class="my-1"><a href="#" class="text-decoration-none text-secondary">Konditerem szabályzat</a></p>
                    <p class="my-1"><a href="#" class="text-decoration-none text-secondary">Nyitvatartás</a></p>
                    <p class="my-1"><a href="#" class="text-decoration-none text-secondary">Fizetési mdódok</a></p>
                    <p class="my-1"><a href="#" class="text-decoration-none text-secondary">Feleősségvállalás</a></p>
                </div>


                <div class="col">
                    <p class="ft-bold text-info">Gyakori kérdések</p>
                    <p class="my-1"><a href="#" class="text-decoration-none text-secondary">--</a></p>
                    <p class="my-1"><a href="#" class="text-decoration-none text-secondary">--</a></p>
                    <p class="my-1"><a href="#" class="text-decoration-none text-secondary">--</a></p>
                    <p class="my-1"><a href="#" class="text-decoration-none text-secondary">--</a></p>
                </div>
            </div>
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>