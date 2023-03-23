<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edzőink</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../CSS/edzoink.css">
</head>

<body>
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
                        <a class="nav-link me-3  mt-3 text-black" href="rolunk_session.php">Rólunk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5 ms-lg-3 mt-lg-3  text-black" style="width: 211px" href="kaloriakalk_session.php">Kalória-kalkulátor</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link me-3 ms-2  mt-3 text-black" href="gyakorlatok_session.php">Gyakorlatok</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3 ms-3 mt-3 text-black" href="#">Edzőink</a>
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
    <div class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col my-5 text-white">
                    <h3>Ismerkedj meg edzőinkkel!</h3>
                    <p>Fordulj hozzájuk bizalommal, keresd őket, ha valamilyen kérdés merülne fel benned!</p>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col m-3">
                <div class="card m-5 border border-0 h-100" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../Pic/edzo1.png" class="img-fluid rounded-5 rounded-top-5" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title my-2">Nagy Dávid</h3>
                                <h5 class="mb-2">Személyi edző</h5>
                                <p>Nagy Dávid vagyok személyi edző. 10 éve foglalkozok sportoktatással. Rengeteg versenyen vettem részt, ahol mind a versenyzőim, de még régebben én is kiemelkedő helyezést értünk el. </p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col m-3">
                <div class="card m-5 border border-0 h-100" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../Pic/edzo2.jpg" class="img-fluid rounded-5 rounded-top-5" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title my-2">Varga Kevin</h3>
                                <h5 class="mb-2">Crossfit oktató</h5>
                                <p>Varga Kevinnek hívnak és Crossfittel foglalkozok már lassan 5. éve. Szenvedélyem a hivatásom, én is rendszeresen szoktam crossfitezni, illetve persze oktatni is. </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col m-3">
                <div class="card m-5 border border-0 h-100" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../Pic/edzo3.png" class="img-fluid rounded-5 rounded-top-5" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title my-2">Árgyelán Bálint</h3>
                                <h5 class="mb-2">Táplálkozási szakértő</h5>
                                <p> Árgyelán Bálintnak hívnak tanulmányaimat az ELTE-n végeztem el. Az erőnléti edzést sokan nem tartják fontosnak, viszont ugyan olyan értékkel rendelkezik, mint a többi edzésforma. Magas intenzitás sok ismétlésszám.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col m-3">
                <div class="card m-5 border border-0 h-100" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../Pic/edzo4.png" class="img-fluid rounded-5 rounded-top-5" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title my-2">Kis Nikolett</h3>
                                <h5 class="mb-2">Erőnléti edző</h5>
                                <p> Kis Nikolett vagyok, de a többiek csak Nikinek szoktak szólítani. Étkezéssel kapcsolatos kérdésekkel én fogok tudni választ adni.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col m-3">
                <div class="card m-5 border border-0 " style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../Pic/edzo5.jpg" class="img-fluid rounded-5 rounded-top-5" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title my-2">Erdei Miklós</h3>
                                <h5 class="mb-2">Box edző</h5>
                                <p>Erdei Miklósnak hívnak és különféle boxoktatással foglalkozom. 12 éve kezdtem el kick-boxolni, majd különböző küzdősport fajtákat is kipróbáltam, a legjobban a thai box nyerte el a tetszésemet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col m-3">
                <div class="card m-5 border border-0 " style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../Pic/edzo6.jpg" class="img-fluid rounded-5 rounded-top-5" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title my-2">Kun Fruzsina</h3>
                                <h5 class="mb-2">Yoga oktató</h5>
                                <p>Kun Fruzsina vagyok, yoga oktató. 5 éve végeztem az egyetemen, ahol mesterszakot végeztem. A jógának mindenféle részét nagyon szívesen oktatom (pl.:alakformáló jóga).</p>
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


</body>

</html>