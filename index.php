<?php
include("baglantiuser.php");

if(isset($_POST["kaydet"])){
	$name=$_POST["kullaniciadi"];
	$email=$_POST["email"];
	$password=password_hash($_POST["parola"], PASSWORD_DEFAULT);

	$ekle="INSERT INTO kullanicilar (kullanici_adi, email, parola) VALUES ('$name','$email','$password')";
	$calistirekle = mysqli_query($baglanpls, $ekle);

	if(!$baglanpls){
		echo "<script>alert('Giriş işlemleriniz hatalı')</script>";
	}
	else{
		echo "<script>alert('Kaydınız başarı ile oluşturuldu.')</script>";
	}

	mysqli_close($baglanpls);

}

if(isset($_POST["giris"])){
	$email=$_POST["email"];
	$password=$_POST["parola"];

	if(isset($email) && isset($password)){
		$secim = "SELECT * FROM  kullanicilar WHERE eposta ='$eposta'";
		$calistir = mysqli_query($baglanpls, $secim);
		$kayitsayisi = mysqli_num_rows($calistir);
		if($kayitsayisi>0){
			$ilgilikayit = mysqli_fetch_assoc($calistir);
			$hashlisifre = $ilgilikayit["parola"];
			if(password_verify($parola,$hashlisifre)){
				session_start();
				$_SESSION["kullanici_adi"]=$ilgilikayit["kullanici_adi"];
				$_SESSION["email"]=$ilgilikayit["email"];
				
				header("location:home.php");

			}
			else{
				echo "<script>alert('Parola yanlış.')</script>";
			}
		}
		else{
			echo "<script>alert('Kullanıcı adı yanlış.')</script>";
		}
	}

	if(!$baglanpls){
		echo "<script>alert('Giriş işlemleriniz hatalı')</script>";
	}
	else{
		echo "<script>alert('Kaydınız başarı ile oluşturuldu.')</script>";
	}

	mysqli_close($baglanpls);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" href='img/kiyavaLogo.png' type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kıyava</title>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #001aff;
	background-color: #002fff;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

.butonlar {
	border-radius: 20px;
	border: 1px solid #001aff;
	background-color: #002fff;
	color: #FFFFFF;
	font-size: 12px;
	padding: 12px 45px;
	letter-spacing: 1px;
    font-weight: bold;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25),
	0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: -webkit-linear-gradient(to right, #8400ff,#002fff,#8400ff);
	background: linear-gradient(to right, #8400ff,#002fff,#8400ff);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
	</style>
</head>
<body>

<h2>Kıyava Giyim-Asistan Uygulamasına Hoşgeldin!</h2><br><br>
<div class="container" id="container">
    <div class="form-container sign-up-container">
    	<form action="index.php" method="POST">
    		<h1>Hesap Oluştur</h1>
    		<div class="social-container">
    			<a href="https://github.com/EmreKaptan57" class="social"><i class="fab fa-github"></i></a>
    			<a href="https://www.instagram.com/emrappsoftware/" class="social"><i class="fab fa-instagram"></i></a>
    			<a href="https://www.linkedin.com/feed/update/urn:li:activity:7043236631801147392" target="_blank" class="social"><i class="fab fa-linkedin-in"></i></a>
    		</div>
    		<span>veya kayıt için e-postanızı kullanın</span>
    		<input type="text" name="kullaniciadi" id="username" placeholder="Kullanıcı Adı" />
    		<input type="email" name="email" id="email" placeholder="E-posta" />
    		<input type="password" name="parola" id="password" placeholder="Şifre" />
			<button type="submit" name="kaydet" class="butonlar">KAYIT OL</button>
    		
    	</form>
    </div>
    <div class="form-container sign-in-container">
    	<form action="index.php" method="POST">
    		<h1>Giriş Yap</h1>
    		<div class="social-container">
    			<a href="https://github.com/EmreKaptan57" class="social"><i class="fab fa-github"></i></a>
    			<a href="https://www.instagram.com/emrappsoftware/" class="social"><i class="fab fa-instagram"></i></a>
    			<a href="https://www.linkedin.com/feed/update/urn:li:activity:7043236631801147392" target="_blank "class="social"><i class="fab fa-linkedin-in"></i></a>
    		</div>
    		<span>veya mevcut hesabınızı kullanın</span>
    		<input type="email" class="email" placeholder="E-posta" />
    		<input type="password" class="password" placeholder="Şifre" />
    		<a href="panelgiris.php">Şifremi Unuttum?</a>
			<button type="submit" name="giris" class="butonlar">GİRİŞ YAP</button>
			
    		
    	</form>
    </div>
    <div class="overlay-container">
    	<div class="overlay">
    		<div class="overlay-panel overlay-left">
                <img src="img/kiyavaLogo.png" alt="kıyava", width="200px"><br>
    			<h1>Tekrar Hoşgeldin!</h1>
    			<p>Bizimle bağlantıda kalmak için lütfen kişisel bilgilerinle giriş yap</p>
    			<button class="ghost" id="signIn">Giriş Yap</button>
    		</div>
    		<div class="overlay-panel overlay-right">
                <img src="img/kiyavaLogo.png" alt="kıyava", width="200px"><br>
    			<h1>Merhaba!</h1>
    			<p>Kişisel bilgilerinizi gir ve bizimle yolculuğa başla</p>
    			<button class="ghost" name="signUp" id="signUp" value="Sign up">Kayıt Ol</button>
    		</div>
    	</div>
    </div>
</div>
    <script src="https://kit.fontawesome.com/7c8801c017.js" crossorign="anonymous"></script>
    <script src="index.js"></script>
</body>
</html>



