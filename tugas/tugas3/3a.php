<?php 

$luas ='10';
$keliling ='20';

echo "<h4>menghitung luas lingkaran</h4>";
function luaslingkaran($r) {
    $luas = 3.14 * $r * $r;
    return $luas . "cm<sup>2</sup>"; 
}
echo "jari-jari = $luas cm.</br>";
echo "luas lingkaran =" . luaslingkaran(10) . "<hr>";

echo "<h4>menghitung keliling lingkaran</h4>";
function kelilinglingkaran($r) {
    $keliling = 2 * 3.14 * $r;
    return $keliling . "cm";
}
echo "jari-jari =$keliling cm. </br>";
echo "luas lingkaran=" . kelilinglingkaran(20) . "<hr>";
?>