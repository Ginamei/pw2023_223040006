<?php
  session_start() ;

     if(!isset($_SESSION['login'])) {
      header("Location: php/login.php") ;
     }

  require 'php/functions.php' ;

  // tampung ke variabel pw_tubes223040006
  $tiket = query("SELECT * FROM tiket");

  // ketika tombol cari di klik
  if(isset($_POST['cari'])) {
    $tiket = cari($_POST['keyword']) ;
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <title>TUBES_223040006</title>
  </head>
  <body>

    <!-- Navbar -->
    <Section class="pt-2">
    <div class="container">
      <nav class="navbar navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand">
            KEINDAHAN ALAM
          </a>
            <form class="d-flex">
              <a class="btn btn-outline-light" href="php/logout.php" role="button">Logout</a>
            </form>
        </div>
      </nav>
    </div>
    </section>
    <!-- End Navbar -->

    <!-- Carousel -->
    <section>
    <div class="container">
      <h2 class="text-center">WISATA SUBANG</h2>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row py-5">
              <div class="col-lg-3">
                <div class="card" style="width: 16rem;">
                  <img src="assets/img/Curug .png" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Curug Cileat</h5>
                  <p class="text-center"><small style="font-style: italic;">Subang</small></p>
                  <p class="text-center"><small><del>20.00rb </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">10.00rb</span></small></p>
              </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 16rem;">
                  <img src="assets/img/curug cileat.jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Air Terjun</h5>
                  <p class="text-center"><small style="font-style: italic;">Subang</small></p>
                  <p class="text-center"><small><del>20.00rb </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">15.00rb</span></small></p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 15rem;">
                  <img src="assets/img/dcastello.jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">D'Castello</h5>
                  <p class="text-center"><small style="font-style: italic;">Subang</small></p>
                  <p class="text-center"><small><del>50.00rb </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">30.00rb</span></small></p>
              </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 15rem;">
                  <img src="assets/img/kebunteh.jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Kebun Teh</h5>
                  <p class="text-center"><small style="font-style: italic;">Subang</small></p>
                  <p class="text-center"><small><del>20.00rb </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">10.00rb</span></small></p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
            <div class="row py-5">
              <div class="col-lg-3">
                <div class="card" style="width: 15rem;">
                  <img src="assets/img/Kebun Teh .jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Kebun Teh</h5>
                  <p class="text-center"><small style="font-style: italic;">Subang</small></p>
                  <p class="text-center"><small><del>12.99rb </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">10.99rb</span></small></p>
              </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 15rem;">
                  <img src="assets/img/ciater.jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Ciater</h5>
                  <p class="text-center"><small style="font-style: italic;">Subang</small></p>
                  <p class="text-center"><small><del>30.99rb </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">25.99rb</span></small></p>
              </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 17rem;">
                  <img src="assets/img/castello.jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Castell</h5>
                  <p class="text-center"><small style="font-style: italic;">Subang</small></p>
                  <p class="text-center"><small><del>34.99rb </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">30.99rb</span></small></p>
              </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 17rem;">
                  <img src="assets/img/Air .jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Curug Cibareubeuy</h5>
                  <p class="text-center"><small style="font-style: italic;">Subang</small></p>
                  <p class="text-center"><small><del>34.99rb </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">31.99rb</span></small></p>
              </div>
            </div>
          </div> 
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    </Section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f8f9fa" fill-opacity="1" d="M0,96L40,96C80,96,160,96,240,112C320,128,400,160,480,170.7C560,181,640,171,720,149.3C800,128,880,96,960,96C1040,96,1120,128,1200,128C1280,128,1360,96,1400,80L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    <!-- End Carousel -->

      <!-- Parallax -->
      <section class="parallex">
          <div class="row py-3">
            <div class="col-lg-9 mx-auto">
              <h1>WisataSubang</h1>
              <p class="py-3">Wisata Subang kini banyak dilirik pengunjung karena wisata alamnya yang mengagumkan dan cocok untuk healing sekaligus menghilangkan penat usai seharian bekerja. Selain pemandian air panas Ciater yang sudah terkenal sejak dulu, kini mulai bermunculan destinasi-destinasi wisata alam baru yang tidak kalah memesona.</p>
                <a class="btn btn-white" href="#main" role="button">SEE ALL</a>
            </div>
          </div>
        </div>
      </section>
      <!-- End Parallax -->

      <!-- Card -->
    <section id="main">
      <div class="container pt-4">
        <div class="row mb-4 pt-4">
            <div class="col text-center">
              <h2>All Items</h2>
            </div>
        </div>

        <!-- Serach  -->
        <form class="d-flex pt-4" action="" method="POST">
          <input class="form-control me-2 keys" type="text" name="keyword" placeholder="Search..">
          <button class="btn btn-outline-light tombol-cari" name="cari" type="submit" autocomplete="off">Search</button>
        </form>
        <!-- End Search -->
      <div class="containers">
      <div class="row py-5">
      <?php foreach($tiket as $bj)  :?>
        <div class="col-lg-3">
          <div class="card" style="width: 18rem;">
            <img src="assets/img/<?= $bj['img'] ; ?>" class="card-img-top pt-5" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center" style="color: #8a1fe5;"><?= $bj['name'] ; ?></h5>
                <p class="card-text text-center"><small><?= $bj['info'] ; ?></small></p>
                <a href="php/detail.php?id=<?= $bj["id"]; ?>" class="btn btn-primary card text-center">Details</a>
              </div>
            </div>
          </div>  
          <?php endforeach ; ?>      
        </div>
        </div>
      </section>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f8f9fa" fill-opacity="1" d="M0,256L48,218.7C96,181,192,107,288,101.3C384,96,480,160,576,165.3C672,171,768,117,864,106.7C960,96,1056,128,1152,128C1248,128,1344,96,1392,80L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

      <!-- Contact Us -->
      <section class="contact bg-light pt-4 text-center">
        <div class="container">
          <div class="row py-3">
            <div class="col-lg-7 mx-auto">
              <a href="https://www.instagram.com/meirinagina_/"><i class='bx bxl-instagram' style="font-size: 1.4rem;"></i></a>
              <a href="https://twitter.com/"><i class='bx bxl-twitter' style="font-size: 1.4rem;"></i></a>
              <a href="https://www.facebook.com/"><i class='bx bxl-facebook' style="font-size: 1.4rem;"></i></a>
              <p class="">&copy; Copyright 2023 G I N A M E I R I N A</p>
            </div>
          </div>
        </div>

      </section>
      <!-- End Contact Us -->    



    <!-- Script JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- MY JS -->
    <script src="js/script2.js"></script>

  </body>
</html>