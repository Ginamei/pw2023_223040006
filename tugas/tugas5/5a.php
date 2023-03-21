<?php 
$mahasiswa = [
    [
        "nrp"      => 223040006,
        "nama"     => "Gina Meirina",
        "email"    => "meirinagina@gmail.com",
        "jurusan"  => "Teknik Informatika",
        "gambar"   => "gina.gif"
    ],
    [
        "nrp"      => 223040016,
        "nama"     => "Davina Putri Kusuma",
        "email"    => "davinaputku@gmail.com",
        "jurusan"  => "Teknik Informatika",
        "gambar"   => "davina.jpg"
    ],
    [
        "nrp"      => 223040009,
        "nama"     => "Indri Tania Lestari",
        "email"    => "indritanialestari@gmail.com",
        "jurusan"  => "Teknik Informatika",
        "gambar"   => "indri.jpg"
    ],
    [
        "nrp"      => 223040012,
        "nama"     => "Revalian Ananda Taufan",
        "email"    => "revaliananandataufan@gmail.com",
        "jurusan"  => "Teknik Informatika",
        "gambar"   => "lian.png"
    ],
    [
        "nrp"      => 223040030,
        "nama"     => "Nita Rahmawati",
        "email"    => "nitarahmawati@gmail.com",
        "jurusan"  => "Teknik Informatika",
        "gambar"   => "nita.jpg"
    ],
    [
        "nrp"      => 223040045,
        "nama"     => "Aurelia Melati Suci",
        "email"    => "aureliaree@gmail.com",
        "jurusan"  => "Teknik Informatika",
        "gambar"   => "aurel.jpg"
    ],
    [
        "nrp"      => 223040003,
        "nama"     => "Ali Imran Rodja",
        "email"    => "aliimranrodja@gmail.com",
        "jurusan"  => "Teknik Informatika",
        "gambar"   => "ali.jpg"
    ],
    [
        "nrp"      => 223040013,
        "nama"     => "Ilham Ramadhana Hartono",
        "email"    => "ilhamramadhanahartono@gmail.com",
        "jurusan"  => "Teknik Informatika",
        "gambar"   => "ilham.jpg"
    ],
    [
        "nrp"      => 223040014,
        "nama"     => "Muhamad Alfath Septian",
        "email"    => "muhamadalfathseptian@gmail.com",
        "jurusan"  => "Teknik Informatika",
        "gambar"   => "alfath.jpg"
    ],
    [
        "nrp"      => 203040040,
        "nama"     => "Fammy Oktariva Setiadi",
        "email"    => "fammyoktarivasetiadi@gmail.com",
        "jurusan"  => "Teknik Informatika",
        "gambar"   => "fammy.png"
    ],

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <img src="img/<?= $mhs["gambar"]; ?>" width="150" height="180">
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>Nrp : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>

        </ul>

    <?php endforeach; ?>
    </body>

</html> 