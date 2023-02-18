<?php 
$var1 = " 6 ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> aku adalah angka <b> <?= $var1 ; ?> </b> </p>
    <p> jika aku dikali 5, maka aku sekarang menjadi <b> <?= $var1 * 5 ; ?> </b> </p>
    <p> jika saya membagi 2,maka saya sekarang menjadi <b> <?= $var1 / 2 ; ?> </b> </p>
    <p> jika aku ditambah 75, maka aku sekarang menjadi <b> <?= $var1 + 75 ; ?> </b> </p>
    <p> jika aku kurang 20, maka aku sekarang menjadi <b> <?= $var1 - 20 ; ?> </b> </p>
</body>
</html>