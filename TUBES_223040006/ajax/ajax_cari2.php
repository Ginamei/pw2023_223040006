<?php 
    require '../php/functions.php';

    $tiket = cari($_GET['keyword']) ;
?>

    <div class="row py-5">
      <?php foreach($tiket as $tik)  :?>
        <div class="col-lg-3">
          <div class="card" style="width: 18rem;">
            <img src="assets/img/<?= $tik['img'] ; ?>" class="card-img-top pt-5" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center" style="color: #8a1fe5;"><?= $tik['name'] ; ?></h5>
                <p class="card-text text-center"><small><?= $tik['info'] ; ?></small></p>
                <a href="php/detail.php?id=<?= $tik["id"]; ?>" class="btn btn-primary card text-center">Details</a>
              </div>
            </div>
          </div>  
          <?php endforeach ; ?>      
        </div>