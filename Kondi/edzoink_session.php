 <?php
    session_start();
    if (isset($_SESSION["user_id"])) {
        // Felhasználó be van jelentkezve
    } else {
        // Felhasználó nincs bejelentkezve, átirányítás a bejelentkező oldalra
        header("Location: loginkondi.php");
        exit;
    }

    require __DIR__ . "/webshop/functions.php";
    $pdo = connect_mysql();
    $edzoinklekerdez = $pdo->prepare("SELECT * FROM edzoink");
    $edzoinklekerdez->execute();

    $edzoink = $edzoinklekerdez->fetchAll(PDO::FETCH_ASSOC);
    require "navbars.php";
    navbar_session("Edzőink");
    ?>

 <body>

     <link rel="stylesheet" href="../CSS/edzoink.css">


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
             <?php foreach ($edzoink as $edzo) : ?>
                 <div class="col mb-5">
                     <div class="card m-5 border border-0 h-100" style="max-width: 540px;">
                         <div class="row g-0">
                             <div class="col-md-4">
                                 <img src="<?= $edzo['img'] ?>" class="img-fluid rounded-5 rounded-top-5" alt="...">
                             </div>
                             <div class="col-md-8">
                                 <div class="card-body">
                                     <h3 class="card-title my-2"><?= $edzo['edzo_nev'] ?></h3>
                                     <h5 class="mb-2"><?= $edzo['edzo_fajta'] ?></h5>
                                     <p><?= $edzo['edzo_leiras'] ?> </p>
                                     <h5><?= $edzo['edzo_kontakt'] ?></h5>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             <?php endforeach; ?>

         </div>
     </div>

     <footer class="bg-dark mt-4 border-top py-5 text-light">

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