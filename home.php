<?php

session_start();
if(isset($_SESSION["eposta"])){}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" href='img/kiyavaLogo.png' type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Kıyava | Anasayfa</title>
    <style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins" ,sans-serif;
}

body {
	background: linear-gradient(45deg,  #0088e2dd,#002fff,#8400ff);
    background-size: 500% 500%;
    animation: animeBG 10s ease infinite;
    animation-direction: alternate;
    color: white;
}

@keyframes animeBG {
    0% {background-position: 0%;}
    100% {background-position: 100%;}
}

.header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 10%;
    background: transparent;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
}

.logo{
    font-size: 25px;
    color: white;
    text-decoration: none;
    font-weight: 600;
    cursor: default;
}

.navbar a{
    font-size: 18px;
    color: white;
    text-decoration: none;
    font-weight: 500;
    margin-left: 35px;
    transition: 0.3s;
}

.navbar a:hover,
.navbar a.active{
    text-decoration: underline;
}

.home{
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    padding: 70px 10% 0;
    text-align: center;
}

.balon {
  position: fixed;
  width: 300px;
  height: auto;
  background-color: #ffffff;
  border-radius: 30px;
  padding: 10px;
  margin-bottom: 20px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
  align-self: start;
}

.balon:before {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 10px 10px 0 0;
  border-color: #ffffff transparent transparent transparent;
  left: 100px;
  bottom: -10px;
}

.metin {
  font-size: 16px;
  line-height: 1.5;
  color:black;
  animation: yazdir 5s steps(20, end);
}

@keyframes yazdir {
  from {
    width: 0;
  }
  to {
    width: 100%;
  }
}

@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins" ,sans-serif;
}

body {
	background: linear-gradient(45deg,  #0088e2dd,#002fff,#8400ff);
    background-size: 500% 500%;
    animation: animeBG 10s ease infinite;
    animation-direction: alternate;
    color: white;
}

@keyframes animeBG {
    0% {background-position: 0%;}
    100% {background-position: 100%;}
}

.header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 10%;
    background: transparent;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
}

.navbar a{
    font-size: 18px;
    color: white;
    text-decoration: none;
    font-weight: 500;
    margin-left: 35px;
    transition: 0.3s;
}


.logo{
    font-size: 25px;
    color: white;
    text-decoration: none;
    font-weight: 600;
    cursor: default;
}

.navbar a:hover,
.navbar a.active{
    text-decoration: underline;
}


.home{
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 70px 10% 0;
}

.home-content{
    max-width: 600px;
}

.home-content h3{
    font-size: 32px;
    font-weight: 700px;
}

#iletisim{
    background-size: cover;
    padding: 50px;
    height: 800px;
    width: 1800px;
    text-align: center;
    background-position: center;
    background-attachment: fixed;
    position: relative;
}

#iletisimopak{
    background: rgba(0, 0, 0, 0.2);
    padding: 30px 20px;
    border-radius: 15px;
    margin-bottom: 50px;
    height: 750px;
    width: 850px;
}

#formgroup{
    width: 800px;
    height: 500px;
    text-align: center;
    align-items: center;
}

#solform{
    width: 49%;
    float: left;
}

#sagform{
    width: 49%;
    float: right;
}

.form-control{
    width: 100%;
    padding: 10px;
    font-size: 15px;
    line-height: 1.5;
    color: #495057;
    background-color: white;
    margin: 10px;
    border-radius: 5px;
    border: 1px solid #495057;
}

textarea{
    font-family: "Poppins" ,sans-serif;
}

input[type="submit"]{
    cursor: pointer;
    background-color: black;
    font-size: 18px;
    letter-spacing: 1px;
    padding: 10px 30px;
    color: white;
    border: 2px solid white;
    border-radius: 10px;
    margin-left: 580px;
}

#adresbaslik{
    font-size: 30px;
    color: white;
}

.adresp{
    color: #ddd;
    font-size: 15px;
    letter-spacing: 1.5px;
}

.container{
    width: 1200px;
    height: 800px;
    margin: auto;
}

#adres{
    width: 450px;
    float: right;
    padding: 30px;
    height: 500px;
    text-align: left;
}

.cont-bottom{
    padding-top: 1rem;
    padding-bottom: 2rem;
    display: flex;
    justify-content: space-around;
    align-items: center;
    text-decoration: none;
}

.cont-bottom a{
    color: #ffffff;
    width: 2rem;
    height: 2rem;
    line-height: 2rem;
    text-align: center;
    font-size: 1.5rem;
    background-color: #181818;
    border-radius: 50%;
    text-decoration: none;
}
.cont-bottom a:hover{
    color: #181818;
    background-color: #ffffff;
    text-decoration: none;
}

.baslik{
     color: white;
}


    </style>
</head>
<body>
    <header class="header">
        <a href="home.php" class="logo">KIYAVA</a>
        <nav class="navbar">
            <a href="home.php" class="active">Anasayfa</a>
            <a href="weather.php">Hava Durumu</a>
            <a href="clothes.php">Kıyafetler</a>
            <a href="contact.php">İletişim</a>
            <a href="index.php">Çıkış Yap</a>
        </nav>
    </header>
    <section class="home">
        <img src="img/kiyavaHuman.png" alt="kıyava", width="200px">
        <div class="balon">
            <div class="metin"></div>
        </div>
        <div id="iletisimopak">
                <h1 class="baslik"><br>Kıyafet tercihinden memnun musun ? Bizimle paylaş.<br><br></h1>
                    <div id="formgroup">
                        <div id="solform">
                            <select required class="form-control">
                                <option value="option1">Kıyafet Seçiniz</option>
                                <option value="option2">Tişört</option>
                                <option value="option3">Gömlek</option>
                                <option value="option3">Kazak</option>
                                <option value="option3">Mont</option>
                            </select>
                            <input type="date" name="tarih" placeholder="Tarih" required class="form-control">
                        </div>
                        <div id="sagform">
                            <input type="number" name="hava" min="-20" max="50" placeholder="Hava °C" required class="form-control">
                            <input type="number" min="1" max="5" name="puan" placeholder="Puan" required class="form-control">
                        </div>
                        <textarea name="mesaj" id="" cols="30" placeholder="Notlar" rows="10" required class="form-control"></textarea>
                        <input type="submit" value="Gönder">
                    </div>
                    

    </section>
    <script src="https://kit.fontawesome.com/7c8801c017.js" crossorign="anonymous"></script>
</body>
<script>
let metin = "Merhaba Emre. Bugün hava oldukça güzel görünüyor. Hava tahminlerine ve geçmiş tercihlerine bakacak olursak bugün tişört giymeni tavsiye edebilirim.";
let index = 0;

function yazdir() {
  if (index < metin.length) {
    document.querySelector(".metin").innerHTML += metin.charAt(index);
    index++;
    setTimeout(yazdir, 100);
  }
}

yazdir();
</script>
</html>

