<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" href='img/kiyavaLogo.png' type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Kıyava | Kıyafetler</title>
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

#customers{
    font-family: "Poppins" ,sans-serif;
    border-collapse: collapse;
    width: 80%;
    align-self: start;
}
#customers td, #costomer th{
    border: 1px solid #dddddd;
    padding: 8px;
}
#customers tr:nth-child(even){background-color: #dddddd;}

#customers tr :hover {background-color: blue;}

#customers th{
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: white;
    color: black;
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
    <header class="header">
        <a href="home.php" class="logo">KIYAVA</a>
        <nav class="navbar">
            <a href="home.php">Anasayfa</a>
            <a href="weather.php">Hava Durumu</a>
            <a href="clothes.php" class="active">Kıyafetler</a>
            <a href="contact.php">İletişim</a>
            <a href="index.php">Çıkış Yap</a>
        </nav>
    </header>
    <section class="home">
        <div class="home-content">
        <img src="img/kiyavaHuman.png" alt="kıyava", width="200px"><br>
        </div>
            <table id="customers">
                <tr>
                    
                    <th>Kıyafet</th>
                    <th>Hava</th>
                    <th>Tarih</th>
                    <th>Puan</th>
                    <th>Notlar</th>
                    
                </tr>
            </table>
    </section>
    <script src="https://kit.fontawesome.com/7c8801c017.js" crossorign="anonymous"></script>
    <script src="clothes.js"></script>
</body>
</html>