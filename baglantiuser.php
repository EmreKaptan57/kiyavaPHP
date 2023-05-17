<?php
$host="localhost";
$kullanici="root";
$parola="";
$vt="uyelik";

$baglanpls = mysqli_connect($host,$kullanici,$parola,$vt);
mysqli_set_charset($baglanpls, "UTF8");

if(!$baglanpls){
    die("Veritabanı bağlantı işlemi başarısız.".mysqli_connect_error());
}
?>