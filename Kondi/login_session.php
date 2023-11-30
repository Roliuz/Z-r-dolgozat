<?php
session_start();

if (isset($_SESSION["user_id"])) {
} else {
    // felhasználó nincs bejelentkezve, átirányítás a bejelentkező oldalra
    header("Location: loginkondi.php");
    exit;
} ?>



<body>
    <style>
        #signin:hover {
            background-color: lightgray;
        }

        .bg-dark .row .col .card:hover {
            background-color: red;
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

    <?php require "navbars.php";
    navbar_session("Főoldal");
    ?>




    <div class="col">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">

            </div>
            <div class="carousel-inner align-items-start">
                <div class="carousel-item active ">
                    <img src="../Pic/kondihatter.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption align-top text-start ">
                        <h1 class=" text-light fw-bold  d-block">Kerülj formába most!</h1> <br>
                        <h3 class="text-light fs-6 mt-3">
                            Professzionális edzőink a maximumot fogják kihozni belőled!
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>






    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 " style="height: 120px;
                                    font-family:Comic Sans MS;">
                <div class="card-body bg-success text-center text-light">
                    <i class="bi bi-geo-alt fs-1 "></i>
                    <h5 class="card-title">JÓ ELHELYEZKEDÉS</h5>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card h-100" style="height: 120px;
                                    font-family:Comic Sans MS;">
                <div class="card-body bg-primary text-center text-light">
                    <i class="fas fa-dumbbell fs-1 mt-2"></i>
                    <h5 class="card-title" style="margin-top: 11.5px;">MODERN GÉPEK</h5>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card h-100" style="height: 120px;
                                    font-family:Comic Sans MS;">
                <div class="card-body bg-warning text-center text-light">
                    <i class="bi bi-journal-check fs-1"></i>
                    <h5 class="card-title ">MENTORÁLÁS</h5>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 " id="kartya" style="height: 120px;
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
            <div class="col d-none d-md-block">
                <img src="../Pic/balsavtestepito.png" class="img-thumbnail  text-center m-lg-5" style="border: none; width: 400px" alt="...">
            </div>
            <div class="col col-md-6">
                <h3 class="fs-3 mt-lg-5 mb-lg-3 mt-md-3 mt-sm-3 mt-xs-3" style="font-family: Bahnschrift SemiBold;">Többet tudsz kihozni magadból mint gondolnád!</h3>
                <h4>Hogyan érheted el az álomformád?</h4>
                <div class="row">
                    <div class="card text-bg-light m-lg-3 mt-lg-4 mb-sm-3 mb-xs-3" style="max-width: 30rem;">
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title text-muted">1<small class="text-dark fw-bold  fs-3 ms-lg-2 "> Légy türelmes!</small></h1>
                            <p>Minden eredmény idővel lesz látható, ne aggódj, ha az első hetekben, hónapokban, nem fogsz látni eredményt, csak csináld amit edzőink terveztek neked. Emlékezz, a jó munkához idő kell!</p>
                        </div>
                    </div>
                    <div class="card text-bg-light mt-lg-3 m-lg-3 mb-sm-3 mb-xs-3" style="max-width: 30rem;">
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title text-muted">2<small class="text-dark fw-bold  fs-3 ms-lg-2 ">
                                    Eddz keményen!</small></h1>
                            <p>Edzés közben, mindig gondolj a célodra. Legyen az versenyfelkészülés, legyen az modellkedés, vagy csak szimplán jobban akarsz kinézni és változtatni szeretnél az életmódodon, gondolj a célra, és csak az lebegjen a szemed előtt!</p>
                        </div>
                    </div>
                    <div class="card text-bg-light my-lg-3 m-lg-3 mb-sm-3 mb-xs-3" style="max-width: 30rem;">
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title text-muted">3<small class="text-dark fw-bold  fs-3 ms-lg-2 ">
                                    Tápálálkozz helyesen!</small></h1>
                            <p>Az egészséges étkezés lényege az, hogy változatos és tápláló ételeket fogyasszunk, amelyek megfelelő mennyiségben tartalmazzák a szükséges tápanyagokat, vitaminokat és ásványi anyagokat. Fontos, hogy az étkezéseink tartalmazzanak elegendő zöldséget, gyümölcsöt, teljes értékű gabonaféléket, sovány fehérjéket és egészséges zsírokat.</p>
                        </div>
                    </div>

                </div>
            </div>


        </div>




    </div>

    <div class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col col-lg-3 col-md-6 my-md-3 my-sm-3 my-2">
                    <div class="card bg-image hover-overlay ripple shadow-1-strong rounded-4 h-100 mx-auto" id="card" style="max-width: 18rem;">
                        <div class="card-body text-center">
                            <img src="../Pic/icon1.png" style="max-width: 13rem;" class="me-lg-1 img-fluid" alt="">
                            <h5 class=" card-title">SÚLYZÓS EDZÉSEK</h5>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 my-md-3 my-sm-3 my-2 ">
                    <div class="card bg-image hover-overlay ripple shadow-1-strong rounded-4  h-100 mx-auto" id="card" style="max-width: 18rem;">
                        <div class="card-body text-center">
                            <img src="../Pic/icon2.png" style="max-width: 13rem;" class="me-lg-1 img-fluid" alt="">
                            <h5 class=" card-title">CROSSFIT EDZÉSEK</h5>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6 col-lg-3 my-md-3 my-sm-3 my-2">
                    <div class="card bg-image hover-overlay ripple shadow-1-strong rounded-4  h-100 mx-auto" id="card" style="max-width: 18rem;">
                        <div class="card-body text-center">
                            <img src="../Pic/icon3.png" style="max-width: 13rem;" class="me-lg-1 img-fluid" alt="">
                            <h5 class=" card-title">YOGA FOGLALKOZÁSOK</h5>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6  my-md-3 my-sm-3 my-2">
                    <div class="card bg-image hover-overlay ripple shadow-1-strong rounded-4  h-100 mx-auto" id="card" style="max-width: 18rem;">
                        <div class="card-body text-center">
                            <img src="../Pic/icon4.png" style="max-width: 13rem;" class="me-lg-1 img-fluid" alt="">
                            <h5 class=" card-title">TRX EDZÉSEK</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="row">
                <div class="col col-lg-3 col-md-6 my-md-3 my-sm-3 my-2">
                    <div class="card bg-image hover-overlay ripple shadow-1-strong rounded-4  h-100 mx-auto" id="card" style="max-width: 18rem;    ">
                        <div class="card-body text-center">
                            <img src="../Pic/icon6.png" style="max-width: 13rem;" class="me-lg-1" alt="">
                            <h5 class=" card-title">NYÚJTÓ EDZÉSEK</h5>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 my-md-3 my-sm-3 my-2">
                    <div class="card bg-image hover-overlay ripple shadow-1-strong rounded-4  h-100 mx-auto" id="card" style="max-width: 18rem;">
                        <div class="card-body text-center">
                            <img src="../Pic/icon7.png" style="max-width: 13rem;" class="me-lg-1" alt="">
                            <h5 class=" card-title">ZUMBA FITNESSZ</h5>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 my-md-3 my-sm-3 my-2">
                    <div class="card bg-image hover-overlay ripple shadow-1-strong rounded-4  h-100 mx-auto" id="card" style="max-width: 18rem;">
                        <div class="card-body text-center">
                            <img src="../Pic/icon8.png" style="max-width: 13rem;" class="me-lg-1" alt="">
                            <h5 class=" card-title">FUNCKCIONÁLIS KÖREDZÉS</h5>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 my-md-3 my-sm-3 my-2">
                    <div class="card bg-image hover-overlay ripple shadow-1-strong rounded-4  h-100 mx-auto" id="card" style="max-width: 18rem;">
                        <div class="card-body text-center">
                            <img src="../Pic/icon4.png" style="max-width: 13rem;" class="me-lg-1" alt="">
                            <h5 class=" card-title">THAI BOX</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="bg-secondary ">
        <div class="container">
            <div class="row">
                <h1 class="mb-lg-5 text-light display-2 text-center" style="font-family: Verdana;">Havi árlista</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-md-6 my-3  ">
                    <div class="card text-bg-dark h-100 mx-auto" style="max-width: 20rem; ">
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
                <div class="col-lg-4 col-sm-12 col-md-6 my-3">

                    <div class="card text-bg-dark  h-100 mx-auto" style="max-width: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title fs-1" style="font-family: Segoe Print;">30.000 FT</h5>
                            <p class="card-text">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-dark text-light mb-2 "></li>
                                <li class="list-group-item bg-dark text-light mb-2">Szabadon használható eszözök</li>
                                <li class="list-group-item bg-dark text-light mb-2">Heti 5 x 2 óra belépés</li>
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
                <div class="col-lg-4 col-sm-12 col-md-12 my-3">
                    <div class="card text-bg-dark h-100 mx-auto" style="max-width: 20rem; ">
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




</body>

</html>