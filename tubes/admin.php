<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "wisatasubang");

// ambil data dari tabel wisatasubang
mysqli_query($conn, "SELECT * FROM tiket")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman admin</title>
</head>
<body>
    <h1>Daftar Pembelian Tiket</h1>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>no</th>
        <th>aksi</th>
        <th>gambar</th>
        <th>nama</th>
        <th>nohp</th>
        <th>alamat</th>
        <th>wisata</th>
</tr>


<?php while( $row = mysqli_fetch_assoc($result) ) : ?>

<tr>
    <td>1</td>
    <td>
        <a href="">ubah</a>
        <a href="">hapus</a>
    </td>
    <td><img src="img/kebunteh.jpg" width="50"></td>
    <td>gina meirina</td>
    <td>08996324289</td>
    <td>subang</td>
    <td>kebunteh</td>
</tr>
<?php  endwhile; ?>


</table>
</body>
</html>