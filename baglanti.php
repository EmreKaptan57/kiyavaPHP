<?php
$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="kiyava";
$vt_port = 3306;

$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi, $vt_port);

if(!$baglan){
    die("Veritabanı bağlantı işlemi başarısız.".mysqli_connect_error());
}



?>