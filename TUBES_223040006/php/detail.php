<?php 
  session_start();

//

    // Mengecek apakah ada id yang dikirimkan dari index.php
    // Jika tidak ada makan akan di redirect ke halaman index.php
    if(!isset($_GET["id"])){
        header("Location : ../php/admin.php");
        exit;
    }

    require ('functions.php') ;

    // Mengambil id dari url
    $id = $_GET["id"];

    // Melakukan query dengan parameter id yang diambil dari url
    $tiket = query ("SELECT * FROM tiket WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?= $tiket["name"];  ?></title>

    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">

  </head>
  <body>
    <div class="container pt-15" style="width: 40%">
        <div class="card">
        <div class="card-header">
            <div class="name text-center mr-13"><?= $tiket["name"] ; ?></div>
            <div class="date text-center mr-13"><?= $tiket["alamat"] ; ?></div>
        </div>
        <div class="card-content text-center mt-5">
            <img src ="../assets/img/<?= $tiket["img"] ; ?>" style="width: 30%">
        </div>
        <div class="card-content fg-gray p-2 text-center">
            <br>
            <span>harga : <?= $tiket["harga"] ; ?></span> <br>
            <span>alamat : <?= $tiket["alamat"] ; ?></span>
        </div>
        <div class="card-footer fg-gray p-2 text-center">
            <span><?= $tiket["info"] ; ?></span>
        </div>
        </div>

        <button class="button bg-gray-hover rounded ml-3 mt-3"><a href="../index.php#main">Back</a></button>
    </div>
</body>
</html>