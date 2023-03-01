<!doctype html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testépítés főoldal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <script src="kaloriakalk.js"></script>
</head>

<body>
    <style>
        #signin:hover {
            background-color: lightgray;
        }

        .form-control {
            border-radius: 50% 15% / 10% 40% 5px;
            border-color: #950000;

        }

        .form-select {
            border-radius: 50% 15% / 10% 40% 5px;
            border-color: #950000;

        }

        .card {
            border-radius: 20px;
        }
    </style>

    <nav class="navbar navbar-expand-lg mb-5 " style="background-color: transparent">
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

                        <a href="loginkondi.php"><button class="btn btn-outline-success text-black mt-3" id="signin" type="button" style="margin-left: 60px; color:black; border-color:black;   ">Bejelentkezés</button></a>
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
                        <h1>Kalória kalkulátor</h1>
                    </td>
                    <td style="max-width: 400px;" class="align-middle bg-dark text-white ">aofdohfnsdkfl opj dfjogjf jgfdjkgjkfdgk ljlkg jlkdxfjflkg jd klfjgkldjkl gjlkdfjgkljdkjgkfdjgkldjlk gjlkej lkfdjlkjlk gkdfjg lkdfjglk jdflk gjfdjg lkdfjg kjfjgkjkgj ogjoperjgopjeropjopewj gopjeroprjgperjgoperpojgopjergjpjdf opgjoperjgopjdfgjdopjlégjdlégjfjjgopdxjgpoxd</td>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container border border-dark border-3 p-5 border-top-0 border-bottom-0 bg-secondary-subtle text-white " style="max-width: 50%; margin-top:-1rem">

        <form class="card bg-dark border-light">
            <div class="card-header text-center ">
                <h3>Kalória kalkulátor</h3>
            </div>
            <div class="card-body">
                <div class="row g-5">
                    <div class="col-sm-4">
                        <div>
                            <h5>Nem: </h5>
                            <div>
                                <div class="row">
                                    <div class="col-6 d-flex align-items-center">
                                        <input checked="" id="gender_male" name="nemek" required="" type="radio" value="ferfi" class="form-check-input" />
                                        <label class="ms-2">Férfi</label>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <input id="gender_female" name="nemek" required="" type="radio" value="no" class="form-check-input" />
                                        <label class="ms-2">Nő</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h5>Kor:</h5>
                        <input type="number" class="form-control" name="kor" required>
                    </div>
                    <div class="col-sm-4">
                        <h5>Testzsírszázalék:</h5>
                        <input type="number" class="form-control " name="testzsir" required> <!-- 3 mező elhelyezése egymás mellett -->
                    </div>



                    <div class="col-sm-6 mt-3">
                        <h5>Magasság (cm):</h5>
                        <input type="number" name="magassag" class="form-control" required>
                    </div>
                    <div class="col-sm-6 mt-3">
                        <h5>Testsúly (kg):</h5>
                        <input type="number" name="testsuly" class="form-control " required>
                    </div>

                    <div class="mt-3">
                        <h5>Aktivitás</h5>
                        <select class="form-select " id="akitivitas" name="aktivitas" required>
                            <option selected value="1.2">Ülőmunka (a nap/hét nagy részében ülő munkát végez)</option>
                            <option value="1.375">Mérsékelten aktív (heti 3-4 alkalommal álló munkát végez)</option>
                            <option value="1.465">Aktív (heti 4-5 alkalmommal, alló, vagy könnyű fizikai munkát végez)</option>
                            <option value="1.55">Nagyon aktív (erős fizikai munkavégzés heti 6-7 alkalommal)</option>
                        </select>
                    </div>

                    <div class="col-sm-5">
                        <div>
                            <h5> Eredmény típusa:</h5>

                            <div class="row g-3">
                                <div class="col-sm-6 align-items-center d-flex">
                                    <input type="radio" checked="" id="tipus_kaloria" name="tipus" value="kcal" class="form-check-input" />
                                    <label class="ms-2">KCAL</label>
                                </div>
                                <div class="col-sm-6 align-items-center d-flex">
                                    <input type="radio" id="tipus_kilojul" name="tipus" value="kilojul" class="form-check-input" />
                                    <label class="ms-2" for="tipus_kilojul">KILOJUL</label>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="col-sm-6 ms-5">
                        <h5> Számolási képlet: <sup> <a href="#kepletek" style="text-decoration: none; color:white;"> ?</a></sup></h5>
                        <div>
                            <div class="row g-3">
                                <div class="col-sm-12 text-center d-flex">
                                    <input checked="" id="mifflin" name="keplet" required="" type="radio" value="mifflin" class="form-check-input" />
                                    <label class="ms-2">Mifflin St Jeor</label>
                                </div>
                                <div class="col-sm-12 text-center d-flex">
                                    <input id="revised" name="keplet" required="" type="radio" value="revised" class="form-check-input" />
                                    <label class="ms-2">Revised Harris-Benedict</label>
                                </div>

                                <div class="col-sm-12 text-center d-flex">
                                    <input id="katch" name="keplet" required="" type="radio" value="katch" class="form-check-input" />
                                    <label class="ms-2">Katch-McArdle</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card-footer text-center mt-3">
                    <button type="button" class="btn btn-light w-50 m-3" onclick="kaloriakalkulator(this)">Kalkuláció</button>
                </div>
            </div>

            <div class="megjeleno_szoveg m-3 "> <!-- lefoglalom a helyet a kiírásnak -->

            </div>

        </form>

    </div>


    <div class="bg-dark-subtle">
        <div class="container">
            <div class="row">
                <div class="col my-auto me-5">

                    <h3 class="fs-2" id="kepletek">Számolási anyagcsere képletek</h2>
                        <p class="fs-5">Az alapanyagcsere szám kiszámítása nem más, mint egy olyan szám meghatározása, ami takarja a test energiaszükségletét (kalóriákban) nyugalmi állapotban. Ezt a mennyiséget égeti el a szervezetünk az alap életfunkciók fenntartása alatt, abban az esetben is, ha épp nem végzünk fizikai aktivitást.</p>

                </div>
                <div class="col">
                    <div class="row m-lg-4">
                        <h5 class="fs-3">Mifflin St Jeor képlet</h5>
                        <p class="my-2"><b>Férfi:</b><br>
                            BMR = 10W + 6.25H - 5A + 5 <br>
                            <b>Nő:</b><br>
                            BMR = 10W + 6.25H - 5A - 161
                        </p>
                    </div>
                    <hr>
                    <div class="row m-lg-4">
                        <h5 class="fs-3">Harris-Benedict képlet</h5>
                        <p class="my-2"><b>Férfi:</b><br>
                            BMR = 13.397W + 4.799H - 5.677A + 88.362<br>
                            <b>Nő:</b><br>
                            BMR = 9.247W + 3.098H - 4.330A + 447.593
                        </p>
                    </div>
                    <hr>
                    <div class="row m-lg-4">
                        <h5 class="fs-3">Harris-Benedict képlet</h5>
                        <p class="my-2"> <b>Férfi, nő:</b><br>
                            BMR = 370 + 21.6(1 - F)W
                        </p>
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



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>