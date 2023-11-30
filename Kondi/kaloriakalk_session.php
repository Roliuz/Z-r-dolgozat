<?php session_start();
if (isset($_SESSION["user_id"])) {
    // Felhasználó be van jelentkezve
} else {
    // Felhasználó nincs bejelentkezve, átirányítás a bejelentkező oldalra
    header("Location: loginkondi.php");
    exit;
}
?>
<?php require "navbars.php";
navbar_session("Kalória-kalkulátor") ?>

<script src="kaloriakalk.js"></script>

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





    <div class="bg-dark mb-0" style="margin-bottom: -1rem;">
        <div class="container">
            <table class="table table-borderless" style="height: 400px;">
                <tbody>
                    <td class="align-middle bg-dark text-white" style="max-width: 400px;">
                        <h1>Kalória kalkulátor</h1>
                    </td>
                    <td style="max-width: 400px;" class="align-middle bg-dark text-white ">A kalória kalkulátor egy olyan eszköz, amely lehetővé teszi, hogy megbecsüljük, mennyi kalóriára van szükségünk az egyes napokon ahhoz, hogy elérjük a kívánt testsúlyt. A kalkulátor az életkorunkat, a nemenket, a testmagasságunkat, a testsúlyunkat és az aktivitási szintünket veszi figyelembe a kalóriaszükséglet meghatározásához.</td>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container border border-dark border-3 p-5 border-top-0 border-bottom-0 bg-secondary-subtle text-white " style="margin-top:-1rem;">

        <form class="card bg-dark border-light p-3 ">
            <div class="card-header text-center ">
                <h3>Kalória kalkulátor</h3>
            </div>
            <div class="card-body">
                <div class="row g-5">
                    <div class="col-sm-6 col-md-4">
                        <div>
                            <h5>Nem: </h5>
                            <div>
                                <div class="row">
                                    <div class="col-6 col-md-12 d-flex align-items-center">
                                        <input checked="" id="gender_male" name="nemek" required="" type="radio" value="ferfi" class="form-check-input" />
                                        <label class="ms-2">Férfi</label>
                                    </div>
                                    <div class="col-6 col-md-12 d-flex align-items-center">
                                        <input id="gender_female" name="nemek" required="" type="radio" value="no" class="form-check-input" />
                                        <label class="ms-2">Nő</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <h5>Kor:</h5>
                        <input type="number" class="form-control" name="kor" required>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <h5>Testzsírszázalék:</h5>
                        <input type="number" class="form-control " name="testzsir" required>
                    </div>



                    <div class="col-sm-6 mt-3 col-md-4 ">
                        <h5>Magasság (cm):</h5>
                        <input type="number" name="magassag" class="form-control" required>
                    </div>
                    <div class="col-sm-6 mt-3 col-md-4 ">
                        <h5>Testsúly (kg):</h5>
                        <input type="number" name="testsuly" class="form-control " required>
                    </div>

                    <div class="col-sm-12 mt-3 col-md-4 ">
                        <h5>Aktivitás</h5>
                        <select class="form-select " id="akitivitas" name="aktivitas" required>
                            <option selected value="1.2">Ülőmunka (a nap/hét nagy részében ülő munkát végez)</option>
                            <option value="1.375">Mérsékelten aktív (heti 3-4 alkalommal álló munkát végez)</option>
                            <option value="1.465">Aktív (heti 4-5 alkalmommal, alló, vagy könnyű fizikai munkát végez)</option>
                            <option value="1.55">Nagyon aktív (erős fizikai munkavégzés heti 6-7 alkalommal)</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-6 mt-3">
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


                        <div class="col-5 col-sm-6 mt-3">
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
                        <h5 class="fs-3">Katch-McArdle képlet</h5>
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



</body>

</html>