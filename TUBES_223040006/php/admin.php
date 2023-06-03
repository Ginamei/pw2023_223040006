<?php 

  session_start();

  if (!isset($_SESSION['login'])) {
      header("Location: ../php/login.php");
      exit;
  } else if(!isset($_SESSION['status'])) {
    header("Location: ../index.php") ;
    exit ;
  }

  // menghubungkan dengan file php lainnya
  require 'functions.php' ;

  // melakukan query
  $tiket = query("SELECT * FROM tiket") ;

  // ketika tombol cari ditekan
  if ( isset($_POST["cari"]) ) {
    $tiket = cari($_POST["keyword"]) ;
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
    <link rel="stylesheet" href="../css/style.css">

    <title>Admin</title>
  </head>
  <body>

    <!-- Navbar -->
    <div class="container">
      <nav class="navbar navbar-light mt-3">
        <div class="container-fluid">
          <a class="navbar-brand">
            KEINDAHAN ALAM
          </a>
            <form class="d-flex">
              <a class="btn btn-outline-light" href="../php/logout.php" role="button">Logout</a>
            </form>
        </div>
      </nav>
    </div>
    <!-- End Navbar -->

    <!-- Carousel -->
    <div class="container pt-4 pb-4">
      <h2 class="text-center">Wisata Subang</h2>
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
                  <img src="../assets/img/Curug .png" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Curug Cileat</h5>
                  <p class="text-center"><small style="font-style: italic;">Subang</small></p>
                  <p class="text-center"><small><del>19.99rb </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">14.99rb</span></small></p>
              </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 16rem;">
                  <img src="../assets/img/curug cileat.jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Air Terjun</h5>
                  <p class="text-center"><small style="font-style: italic;">Subang</small></p>
                  <p class="text-center"><small><del>50.99rb </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">35.99rb</span></small></p>
              </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 15rem;">
                  <img src="../assets/img/kebun.jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Kebun Teh</h5>
                  <p class="text-center"><small style="font-style: italic;">Subang</small></p>
                  <p class="text-center"><small><del>40.99rb </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">30.99rb</span></small></p>
              </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 14rem;">
                  <img src="../assets/img/ciater.jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Ciater</h5>
                  <p class="text-center"><small style="font-style: italic;">Subang</small></p>
                  <p class="text-center"><small><del>19.99rb </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">13.99rb</span></small></p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
            <div class="row py-5">
              <div class="col-lg-3">
                <div class="card" style="width: 16rem;">
                  <img src="../assets/img/kebunteh.jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Kebun Teh Ciater</h5>
                  <p class="text-center"><small style="font-style: italic;">Subang</small></p>
                  <p class="text-center"><small><del>12.99rb </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">10.99rb</span></small></p>
              </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 16rem;">
                  <img src="../assets/img/dcastello.jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">D'Castello</h5>
                  <p class="text-center"><small style="font-style: italic;">Subang</small></p>
                  <p class="text-center"><small><del>30.99rb </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">25.99rb</span></small></p>
              </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 16rem;">
                  <img src="../assets/img/Air .jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Air Terjun</h5>
                  <p class="text-center"><small style="font-style: italic;">Subang</small></p>
                  <p class="text-center"><small><del>34.99rb </del><span style="color: rgb(114, 5, 223); font-size: 19px;font-weight: 800; padding-left: 5px;">30.99rb</span></small></p>
              </div>
            </div>

            <div class="col-lg-3">
                <div class="card" style="width: 14rem;">
                  <img src="../assets/img/Kebun Teh .jpg" class="card-img-top d-block w-100" alt="...">
                  <h5 class="text-center">Kebun Teh Sariater</h5>
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

    <!-- Main -->
    <section class="main" id="main" style="background-color: snowhite;">
      <div class="container pt-5">
        <div class="row mb-4 pt-4">
          <div class="col text-center">
            <h2>All Items</h2>
          </div>
        </div>

        <!-- Serach  -->
        <form class="d-flex pt-4" action="" method="POST">
          <input class="form-control me-2 keyword" type="text" name="keyword" placeholder="Search..">
          <button class="btn btn-outline-light tombol-cari" name="cari" type="submit" autocomplete="off">Search</button>
        </form>
        <!-- End Search -->

        <a href="../php/tambah.php" class="btn btn-warning mt-5">Tambah</a>

        <div class="containers">
          <table class="table table-bordered mt-5">
            <thead>
              <tr>
                <th class="text-center" scope="col">No</th>
                <th class="text-center" scope="col">Picture</th>
                <th class="text-center" scope="col">Name</th>
                <th class="text-center" scope="col">Details</th>
                <th class="text-center" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($tiket as $bj) : ?>
              <tr>
                <td class="text-center pt-5"><?= $bj["id"]; ?></td>
                <td class="text-center"><img src="../assets/img/<?= $bj["img"]; ?>" width="100px" alt=""></td>
                <td class="text-center pt-5"><?= $bj["name"]; ?></td>
                <td class="text-center pt-5"><a href="../php/detail2.php?id=<?= $bj["id"]; ?>" class="btn btn-light">Details</a></td>
                <td class="text-center pt-5">
                <a href="../php/ubah.php?id=<?= $bj["id"]; ?>" class="btn btn-outline-light">Ubah</a>
                <a href="../php/hapus.php?id=<?= $bj["id"]; ?>" onclick="return confirm ('Apakah Anda Yakin Ingin Menghapus Data?') ;" class="btn btn-light">Hapus</a>
                </td>              
                <?php endforeach; ?>
            </tbody>
          </table>
          </div>

      </div>
    </section>
    <!-- End Main -->

    <!-- Contact Us -->
      <section class="contact bg-light pt-4 text-center">
        <div class="container">
          <div class="row py-3">
            <div class="col-lg-7 mx-auto">
              <p>&copy; Copyright 2023 G I N A M E I R I N A</p>
            </div>
          </div>
        </div>
      </section>
    <!-- End Contact Us -->  

    <!-- Script JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- My JS -->
    <script src="../js/script1.js"></script>

  </body>
</html>