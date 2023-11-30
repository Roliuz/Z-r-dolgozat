 <?php require "navbars.php";
    navbar_normal("Rólunk"); ?>

 <body>
     <style>
         #signin:hover {
             background-color: lightgray;
         }
     </style>

     <link rel="stylesheet" href="../CSS/rolunk.css">

     <div class="container">
         <div class="row">
             <div class="col mt-lg-3 my-sm-3">
                 <img src="../Pic/rolunkfoto1.png" alt="" style="max-width: 15rem;transform: scaleX(-1);" class="me-lg-3 ms-lg-3 img-fluid">
                 <img src="../Pic/rolunkfoto2.png" alt="" style="max-width: 15rem;" class="mt-lg-5 img-fluid ">
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


                 </div>
                 <div class="carousel-inner ms-4">
                     <div class="carousel-item active" data-bs-interval="10000">
                         <img src="../Pic/transform1.png" class="d-block w-100" alt="...">
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
             </div>
         </div>

     </div>

     <div class="bg-success-subtle">
         <div class="container">
             <div class="row">
                 <div class="col my-5 " style="font-family: Consolas;">

                     <h1 class="text-bold fs-3 mt-5" id="csatlakozas">Csatlakozz ma a közösségünkhöz!</h1>
                     <p class="mb-5">Tagságodnak köszönhetően rengeteg dolgohoz hozzáférhetsz, többnyire használhatod webshopunkat, amely rengeteg minőségi értendkiegészítőkkel várja Önt!</p>
                 </div>
                 <div class="col col border-end  d-flex justify-content-center align-items-center">
                     <a href="registrationkondi.php"><button type="button" id="regisztralok" class="my-5 fs-2">Regisztrálok!</button></a>

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