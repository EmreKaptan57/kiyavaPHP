<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href='img/kiyavaLogo.png' type="image/x-icon" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body {
  background: linear-gradient(45deg,  #0088e2dd,#002fff,#8400ff);
    background-size: 500% 500%;
    animation: animeBG 10s ease infinite;
    animation-direction: alternate;
    font-family: "Poppins" ,sans-serif;
    height: 900px;
}


@keyframes animeBG {
    0% {background-position: 0%;}
    100% {background-position: 100%;}
}

.h2{
  color: white;
  
}


.butonlar {
	border-radius: 20px;
  text-align: center;
	background-color: red;
	color: #FFFFFF;
	font-size: 12px;
	padding: 10px 45px;
	letter-spacing: 1px;
  font-weight: bold;
	transition: transform 80ms ease-in;
  text-decoration: none;
  margin-left: 50px;
}


* {
  box-sizing: border-box;
}

.input-container {
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: black;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

.btn {
  background-color: black;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<form action="panelgiris.php" method="post" style="max-width:520px;margin:auto">
  <h2 class="h2">Kıyava Admin Paneli<a href='index.php' class='butonlar'>Kullanıcı Sayfası</a></h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Kullanıcı Adı" name="usrnm">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Şifre" name="psw">
  </div>

  <button type="submit" class="btn">Giriş Yap</button>
</form>

</body>
</html>

<?php
session_start();

if(isset($_POST["usrnm"], $_POST["psw"])){
  if($_POST["usrnm"]=="emre" && $_POST["psw"]=="emre"){
    $_SESSION["user"]=$_POST["usrnm"];
    header("location:panel.php");
  }
  else{
    echo "<script>alert('Giriş işlemleriniz hatalı')</script>";
  }
}
?>
