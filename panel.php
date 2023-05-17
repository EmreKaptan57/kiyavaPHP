<!DOCTYPE html>
<html>
<head>
<link rel="icon" href='img/kiyavaLogo.png' type="image/x-icon" />
<style>


#customers{
    font-family: "Poppins" ,sans-serif;
    border-collapse: collapse;
    width: 100%;
}
#customers td, #costomer th{
    border: 1px solid #ddd;
    padding: 8px;
}
#customers tr:nth-child(even){background-color: #ddd;}

#customers tr :hover {background-color: blue;}

#customers th{
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: blue;
    color: white;
}

.butonlar {
	border-radius: 20px;
	background-color: red;
	color: #FFFFFF;
	font-size: 12px;
	padding: 10px 45px;
	letter-spacing: 1px;
    font-weight: bold;
	transition: transform 80ms ease-in;
    text-decoration: none;
}

</style>
</head>
<body>
<table id="customers">
    <tr>
        <th>Ad Soyad</th>
        <th>Telefon</th>
        <th>Email</th>
        <th>Konu</th>
        <th>Mesaj</th>
    </tr>
<?php

session_start();

if($_SESSION["user"]==""){
    echo "<script>window.location.href='cikis.php'</script>";
}
else{
echo "Admin Kullanıcı Girişi : ".$_SESSION['user']."<br><br>";
echo "<a href='cikis.php' class='butonlar'>ÇIKIŞ YAP</a><br><br>";
include("baglanti.php");
$sec="Select * From contact";
$sonuc=$baglan->query($sec);

if($sonuc->num_rows>0){
    while($cek=$sonuc->fetch_assoc()){
        echo "
        <tr>
            <td>".$cek['adsoyad']."</td>
            <td>".$cek['telefon']."</td>
            <td>".$cek['email']."</td>
            <td>".$cek['konu']."</td>
            <td>".$cek['mesaj']."</td>
        </tr>
        ";
    }
}

else{
    echo "Veritabanında Veri Bulunamadı.";
}
}

?>
</table>

</body>
</html>
