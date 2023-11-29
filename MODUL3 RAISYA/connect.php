<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost:3308";
$username = "root";
$pw = "";
$database = "wad_modul3";

$connect = mysqli_connect($host, $username, $pw, $database);
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if ($connect->connect_error){
    echo "Koneksi Gagal!";
}
// 
?>