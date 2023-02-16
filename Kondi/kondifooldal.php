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

    <nav class="navbar navbar-expand-lg  " style="background-color: transparent">
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






    <div class="row">
        <div class="col mt-lg-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../Pic/kondihatter.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block align-items-start" style="margin-bottom: 600px;">
                            <h1 class="display-6 text-light fw-bold text-start text-top">Kerülj formába most!</h1> <br>
                            <h3 class="text-light fs-6 mt-3 text-start">
                                Professzionális edzőink a maximumot fogják kihozni belőled!
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    </div>
    <div class="row">
        <div class="col">
            <div class="card" style="height: 120px;
                                    font-family:Comic Sans MS;">
                <div class="card-body bg-success text-center text-light">
                    <i class="bi bi-geo-alt fs-1 "></i>
                    <h5 class="card-title">JÓ ELHELYEZKEDÉS</h5>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="height: 120px;
                                    font-family:Comic Sans MS;">
                <div class="card-body bg-primary text-center text-light">
                    <i class="fas fa-dumbbell fs-1 mt-2"></i>
                    <h5 class="card-title" style="margin-top: 11.5px;">MODERN GÉPEK</h5>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="height: 120px;
                                    font-family:Comic Sans MS;">
                <div class="card-body bg-warning text-center text-light">
                    <i class="bi bi-journal-check fs-1"></i>
                    <h5 class="card-title ">MENTORÁLÁS</h5>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" id="kartya" style="height: 120px;
                                    font-family:Comic Sans MS;">
                <div class="card-body bg-info text-center text-light">
                    <i class="fas fa-swimming-pool fs-1 mt-2"></i>
                    <h5 class="card-title" style="margin-top: 11.5px;">ÚSZÓMEDENCE</h5>

                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="../Pic/balsavtestepito.png" class="img-thumbnail text-center m-lg-5" style="border: none; width: 400px" alt="...">
            </div>
            <div class="col">
                <h3 class="fs-3 mt-lg-5 mb-lg-3" style="font-family: Bahnschrift SemiBold;">Többet tudsz kihozni magadból mint gondolnád!</h3>
                <h4>Hogyan érheted el az álomformád?</h4>
                <div class="row">
                    <div class="card text-bg-light mt-lg-4" style="max-width: 30rem;">
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title text-muted">1<small class="text-dark fw-bold  fs-3 ms-lg-2 "> Légy türelmes!</small></h1>
                            <p>Minden eredmény idővel lesz látható, ne aggódj, ha az első hetekben, hónapokban, nem fogsz látni eredményt, csak csináld amit edzőink terveztek neked. Emlékezz, a jó munkához idő kell!</p>
                        </div>
                    </div>
                    <div class="card text-bg-light mt-lg-3" style="max-width: 30rem;">
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title text-muted">2<small class="text-dark fw-bold  fs-3 ms-lg-2 ">
                                    Eddz keményen!</small></h1>
                            <p>Edzés közben, mindig gondolj a célodra. Legyen az versenyfelkészülés, legyen az modellkedés, vagy csak szimplán jobban akarsz kinézni és változtatni szeretnél az életmódodon, gondolj a célra, és csak az lebegjen a szemed előtt!</p>
                        </div>
                    </div>
                    <div class="card text-bg-light my-lg-3" style="max-width: 30rem;">
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title text-muted">3<small class="text-dark fw-bold  fs-3 ms-lg-2 ">
                                    Eddz keményen!</small></h1>
                            <p>Edzés közben, mindig gondolj a célodra. Legyen az versenyfelkészülés, legyen az modellkedés, vagy csak szimplán jobban akarsz kinézni és változtatni szeretnél az életmódodon, gondolj a célra, és csak az lebegjen a szemed előtt!</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>




    </div>

    <div class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col m-lg-1 mt-lg-2" id="col">
                    <div class="card bg-image hover-overlay ripple shadow-1-strong rounded-4" id="card" style="width: 18rem;    ">
                        <div class="card-body text-center">
                            <img src="../Pic/icon1.png" style="width: 13rem;" class="me-lg-1" alt="">
                            <h5 class=" card-title">SÚLYZÓS EDZÉSEK</h5>
                        </div>
                    </div>
                </div>
                <div class="col m-lg-1 mt-lg-2" id="col">
                    <div class="card bg-image hover-overlay ripple shadow-1-strong rounded-4" id="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <img src="../Pic/icon2.png" style="width: 13rem;" class="me-lg-1" alt="">
                            <h5 class=" card-title">CROSSFIT EDZÉSEK</h5>
                        </div>
                    </div>
                </div>
                <div class="col m-lg-1 mt-lg-2" id="col">
                    <div class="card bg-image hover-overlay ripple shadow-1-strong rounded-4" id="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <img src="../Pic/icon3.png" style="width: 13rem;" class="me-lg-1" alt="">
                            <h5 class=" card-title">YOGA FOGLALKOZÁSOK</h5>
                        </div>
                    </div>
                </div>
                <div class="col m-lg-1 mt-lg-2" id="col">
                    <div class="card bg-image hover-overlay ripple shadow-1-strong rounded-4" id="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <img src="../Pic/icon4.png" style="width: 13rem;" class="me-lg-1" alt="">
                            <h5 class=" card-title">TRX EDZÉSEK</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="row">
                <div class="col m-lg-1 my-lg-4" id="col">
                    <div class="card bg-image hover-overlay ripple shadow-1-strong rounded-4" id="card" style="width: 18rem;    ">
                        <div class="card-body text-center">
                            <img src="../Pic/icon6.png" style="width: 13rem;" class="me-lg-1" alt="">
                            <h5 class=" card-title">NYÚJTÓ EDZÉSEK</h5>
                        </div>
                    </div>
                </div>
                <div class="col m-lg-1 my-lg-4" id="col">
                    <div class="card bg-image hover-overlay ripple shadow-1-strong rounded-4" id="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <img src="../Pic/icon7.png" style="width: 13rem;" class="me-lg-1" alt="">
                            <h5 class=" card-title">ZUMBA FITNESSZ</h5>
                        </div>
                    </div>
                </div>
                <div class="col m-lg-1 my-lg-4" id="col">
                    <div class="card bg-image hover-overlay ripple shadow-1-strong rounded-4" id="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <img src="../Pic/icon8.png" style="width: 13rem;" class="me-lg-1" alt="">
                            <h5 class=" card-title">FUNCKCIONÁLIS KÖREDZÉS</h5>
                        </div>
                    </div>
                </div>
                <div class="col m-lg-1 my-lg-4" id="col">
                    <div class="card bg-image hover-overlay ripple shadow-1-strong rounded-4" id="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <img src="../Pic/icon4.png" style="width: 13rem;" class="me-lg-1" alt="">
                            <h5 class=" card-title">THAI BOX</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../Pic/bodybuilder2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="mb-lg-5 text-light display-2 " style="font-family: Verdana;">Havi árlista</h1>
                    <div class="row">
                        <div class="col">
                            <div class="card text-bg-dark mb-3 " style="max-width: 20rem; height: 600px;">
                                <div class="card-body">
                                    <h5 class="card-title fs-1" style="font-family: Segoe Print;">15.000 FT</h5>
                                    <p class="card-text">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item bg-dark text-light mb-2 "></li>
                                        <li class="list-group-item bg-dark text-light mb-2">Szabadon használható eszözök</li>
                                        <li class="list-group-item bg-dark text-light mb-2">Heti 5 x 1,5 óra belépés</li>
                                        <li class="list-group-item bg-dark text-light mb-2">Medence használata</li>
                                        <li class="list-group-item bg-dark text-light mb-2">--------------</li>
                                        <li class="list-group-item bg-dark text-light mb-2">--------------</li>
                                        <li class="list-group-item bg-dark text-light mb-2">--------------</li>
                                        <li class="list-group-item bg-dark text-light mb-2">--------------</li>
                                        <li class="list-group-item bg-dark text-light mb-2 "></li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-bg-dark mb-3" style="max-width: 20rem; height: 600px;">
                                <div class="card-body">
                                    <h5 class="card-title fs-1" style="font-family: Segoe Print;">30.000 FT</h5>
                                    <p class="card-text">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item bg-dark text-light mb-2 "></li>
                                        <li class="list-group-item bg-dark text-light mb-2">Szabadon használható eszözök</li>
                                        <li class="list-group-item bg-dark text-light mb-2">Heti 5 x 1,5 óra belépés</li>
                                        <li class="list-group-item bg-dark text-light mb-2">Medence használata</li>
                                        <li class="list-group-item bg-dark text-light mb-2">Szauna használata</li>
                                        <li class="list-group-item bg-dark text-light mb-2">3 ingyenesen választható edzésforma</li>
                                        <li class="list-group-item bg-dark text-light mb-2">--------------</li>
                                        <li class="list-group-item bg-dark text-light mb-2">--------------</li>
                                        <li class="list-group-item bg-dark text-light mb-2 "></li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-bg-dark mb-3" style="max-width: 20rem; height: 600px;">
                                <div class="card-body">
                                    <h5 class="card-title fs-1" style="font-family: Segoe Print;">43.000 FT</h5>
                                    <p class="card-text">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item bg-dark text-light mb-2 "></li>
                                        <li class="list-group-item bg-dark text-light mb-2">Szabadon használható eszözök</li>
                                        <li class="list-group-item bg-dark text-light mb-2">Heti 5 x 1,5 óra belépés</li>
                                        <li class="list-group-item bg-dark text-light mb-2">Medence használata</li>
                                        <li class="list-group-item bg-dark text-light mb-2">Szauna használata</li>
                                        <li class="list-group-item bg-dark text-light mb-2">4 ingyenesen választható edzésforma</li>
                                        <li class="list-group-item bg-dark text-light mb-2">Welcome drink</li>
                                        <li class="list-group-item bg-dark text-light mb-2">Ingyenes edzésterv, mentoráció</li>
                                        <li class="list-group-item bg-dark text-light mb-2 "></li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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