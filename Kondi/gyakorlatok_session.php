 <?php session_start();
    if (isset($_SESSION["user_id"])) {
        // Felhasználó be van jelentkezve
    } else {
        // Felhasználó nincs bejelentkezve, átirányítás a bejelentkező oldalra
        header("Location: loginkondi.php");
        exit;
    }
    ?>




 <link rel="stylesheet" href="../CSS/gyakorlatok.css">




 <body>
     <style>
         #signin:hover {
             background-color: lightgray;
         }

         .bg-dark .row .col .card:hover {
             background-color: red;
         }
     </style>




     <?php require "navbars.php";
        navbar_session("Gyakorlatok") ?>

     <div class="bg-dark mb-0" style="margin-bottom: -1rem;">
         <div class="container">
             <table class="table table-borderless" style="height: 400px;">
                 <tbody>
                     <td class="align-middle bg-dark text-white" style="max-width: 400px;">
                         <h1>Gyakorlatok</h1>
                     </td>
                     <td style="max-width: 400px;" class="align-middle bg-dark text-white ">
                         <p>A konditermi gyakorlatok fontos szerepet játszanak az izomzat erősítésében és az egészséges testtartás elérésében. A guggolás az egyik alapvető lábgyakorlat, amely az alsó test erősítésére fókuszál. A vállszélességű lábakkal történő guggolás során a combizmok, a fenékizmok és a hasizmok dolgoznak. A fekvőtámasz pedig az egyik legjobb gyakorlat a felsőtest erősítéséhez, amely a mellizmok, a tricepszek és a deltoidok munkáját igényli.</p>

                         <p>
                             A konditermi gyakorlatok végzése előtt mindig fontos a megfelelő bemelegítés és a megfelelő technika elsajátítása. A helytelen technika nem csak csökkentheti az eredményeket, de sérüléseket is okozhat. Ha pedig egy adott gyakorlat túl nehéznek bizonyul, mindig érdemes egy tapasztalt személyi edző segítségét kérni.
                         </p>
                         <p>

                             Az állandó gyakorlás és a kitartás azonban eredményekhez vezet, és a konditermi gyakorlatok rendszeres végzése segíthet abban, hogy erősebb, egészségesebb és jobb formában legyünk.
                         </p>



                     </td>
                 </tbody>
             </table>
         </div>
     </div>

     <div class="container">
         <div class="row">
             <div class="card border border-0 text-white mt-4 mb-3">
                 <a href="mellizom.php">
                     <div class="kartyahatter"><img src="../Pic/mellizom.png" class="card-img img-fluid " alt="..."></div>
                     <div class="card-img-overlay">
                         <h5 class="card-title text-center fs-1">Mellizom</h5>

                     </div>
                 </a>
             </div>
         </div>
         <div class="row">
             <div class="card border border-0 text-white mt-4 mb-3">
                 <a href="vallizom.php">
                     <div class="kartyahatter"><img src="../Pic/vallizom.png" class="card-img img-fluid " alt="..."></div>
                     <div class="card-img-overlay">
                         <h5 class="card-title text-center fs-1">Váll izom</h5>

                     </div>
                 </a>
             </div>
         </div>
         <div class="row">
             <div class="card border border-0 text-white mt-4 mb-3">
                 <a href="hatizom.php">
                     <div class="kartyahatter"><img src="../Pic/hatizom.png" class="card-img img-fluid " alt="..."></div>
                     <div class="card-img-overlay">
                         <h5 class="card-title text-center fs-1">Hát izom</h5>

                     </div>
                 </a>
             </div>
         </div>
         <div class="row">
             <div class="card border border-0 text-white mt-4 mb-3">
                 <a href="bicepsz.php">
                     <div class="kartyahatter"><img src="../Pic/bicepsz.png" class="card-img img-fluid " alt="..."></div>
                     <div class="card-img-overlay">
                         <h5 class="card-title text-center fs-1">Bicepsz</h5>

                     </div>
                 </a>
             </div>
         </div>
         <div class="row">
             <div class="card border border-0 text-white mt-4 mb-3">
                 <a href="tricepsz.php">
                     <div class="kartyahatter"><img src="../Pic/tricepsz.png" class="card-img img-fluid " alt="..."></div>
                     <div class="card-img-overlay">
                         <h5 class="card-title text-center fs-1">Tricepsz</h5>

                     </div>
                 </a>
             </div>
         </div>

         <div class="row">
             <div class="card border border-0 text-white mt-4 mb-3">
                 <a href="labizom.php">
                     <div class="kartyahatter"><img src="../Pic/combizom.png" class="card-img img-fluid " alt="..."></div>
                     <div class="card-img-overlay">
                         <h5 class="card-title text-center fs-1">Láb izom</h5>
                     </div>
                 </a>
             </div>
         </div>
     </div>
     <footer class="bg-dark mt-4 border-top py-5 text-light">


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