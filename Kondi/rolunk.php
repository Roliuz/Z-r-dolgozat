 <!doctype html>
 <html lang="hu">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Testépítés főoldal</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


 </head>

 <body>
     <style>
         #signin:hover {
             background-color: lightgray;
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

                         <button class="btn btn-outline-success text-black mt-3" id="signin" type="submit" style="margin-left: 60px; color:black; border-color:black;   ">Bejelentkezés</button>
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
                 <p>aslékdléksdfljsdlflésjdéfjlsdjfléjsdléjfléjsdléflésjléfjlésdjfjlsdléfjésjdéf jéjléjsdléfjlésdjfléjkjflksjdfksdlkglkjgjd kj lkjg lkj lkjd lkj lkjgkj kjs</p>
             </div>
         </div>
     </div>

     <div class="row my-lg-4" style="background-color: #F29900;">


         <div class="col">
             2
         </div>
         <div class="col ">
             <div id="carouselExampleDark" class="carousel carousel-dark slide w-50 my-lg-4">
                 <div class="carousel-indicators">
                     <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                     <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                     <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                 </div>
                 <div class="carousel-inner">
                     <div class="carousel-item active" data-bs-interval="10000">
                         <img src="../Pic/transform1.jpg" class="d-block w-100 h-100" alt="...">
                         <div class="carousel-caption d-none d-md-block">
                             <h5>First slide label</h5>
                             <p>Some representative placeholder content for the first slide.</p>
                         </div>
                     </div>
                     <div class="carousel-item" data-bs-interval="2000">
                         <img src="../Pic/transform2.jpg" class="d-block w-100 h-100" alt="...">
                         <div class="carousel-caption d-none d-md-block">
                             <h5>Second slide label</h5>
                             <p>Some representative placeholder content for the second slide.</p>
                         </div>
                     </div>
                     <div class="carousel-item">
                         <img src="../Pic/transform3.jpg" class="d-block w-100 h-100" alt="...">
                         <div class="carousel-caption d-none d-md-block">
                             <h5>Third slide label</h5>
                             <p>Some representative placeholder content for the third slide.</p>
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

         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
 </body>

 </html>