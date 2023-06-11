<?php 
    require '../php/functions.php';

    $tiket = cari($_GET['keyword']) ;
?>

        <table class="table table-bordered mt-5">
            <thead>
              <tr>
                <th class="text-center" scope="col">Picture</th>
                <th class="text-center" scope="col">Name</th>
                <th class="text-center" scope="col">Details</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($tiket as $tik) : ?>
              <tr>
                <td class="text-center pt-5"><?= $tik["id"]; ?></td>
                <td class="text-center"><img src="../assets/img/<?= $tik["img"]; ?>" width="100px" alt=""></td>
                <td class="text-center pt-5"><?= $tik["name"]; ?></td>
                <td class="text-center pt-5"><a href="../php/detail2.php?id=<?= $tik["id"]; ?>" class="btn btn-light">Details</a></td>
                <td class="text-center pt-5">
                <a href="../php/ubah.php?id=<?= $tik["id"]; ?>" class="btn btn-outline-light">Ubah</a>
                <a href="../php/hapus.php?id=<?= $tik["id"]; ?>" onclick="return confirm ('Apakah Anda Yakin Ingin Menghapus Data?') ;" class="btn btn-light">Hapus</a>
                </td>              
                <?php endforeach; ?>
            </tbody>
          </table>