<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" href='img/kiyavaLogo.png' type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kıyava | Hava Durumu</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    border: 0;
    outline: none;
    box-sizing: border-box;
    font-family: "Poppins" ,sans-serif;
}

body{
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(45deg,  #0088e2dd,#002fff,#8400ff);
    background-size: 500% 500%;
    animation: animeBG 10s ease infinite;
    animation-direction: alternate;
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

.container{
    position: relative;
    width: 400px;
    height: 100px;
    background: #fff;
    padding: 28px 32px;
    overflow: hidden;
    border-radius: 18px;
    font-family: "Poppins" ,sans-serif;
    transition: 0.6s ease-out;
}

.search-box{
    width: 100%;
    height: min-content;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.search-box input{
    color: #06283D;
    width: 80%;
    font-size: 24px;
    font-weight: 500;
    text-transform: capitalize;
    padding-left: 32px;
}

.search-box input::placeholder{
    font-size: 20px;
    font-weight: 500;
    color: #06283D;
    text-transform: capitalize;
}

.search-box button{
    cursor: pointer;
    width: 50px;
    height: 50px;
    color: #06283D;
    background: #dff6ff;
    border-radius: 50%;
    font-size: 22px;
    transition: 0.4s ease;
}

.search-box button:hover{
    color: #fff;
    background: #06283D;
}

.search-box i{
    position: absolute;
    color: #06283D;
    font-size: 28px;
}

.weather-box{
    text-align: center;
}

.weather-box img{
    width: 60%;
    margin-top: 30px;
}

.weather-box .temperature{
    position: relative;
    color: #06283D;
    font-size: 4rem;
    font-weight: 800;
    margin-top: 30px;
    margin-left: -16px;
}

.weather-box .temperature span{
    position: absolute;
    margin-left: 4px;
    font-size: 1.5rem;
}

.weather-box .description{
    color: #06283D;
    font-size: 22px;
    font-weight: 500;
    text-transform: capitalize;
}

.weather-details{
    width: 100%;
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
}

.weather-details .humidity .weather-details .wind{
    display: flex;
    align-items: center;
    width: 50%;
    height: 100px;
}

.weather-details .humidity{
    padding-left: 20px;
    justify-content: flex-start;
}

.weather-details .wind{
    padding-right: 20px;
    justify-content: flex-end;
}

.weather-details i{
    color: #06283D;
    font-size: 26px;
    margin-right: 10px;
    margin-top: 6px;
}

.weather-details span{
    color: #06283D;
    font-size: 22px;
    font-weight: 500;
}

.weather-details p{
    color: #06283D;
    font-size: 14px;
    font-weight: 500;
}

.not-found{
    width: 100%;
    text-align: center;
    margin-top: 50px;
    scale: 0;
    opacity: 0;
    display: none;
}

.not-found img{
    width: 70%;
}

.not-found p{
    color: #06283D;
    font-size: 22px;
    font-weight: 500;
    margin-top: 12px;
}

.weather-box, .weather-details{
    scale: 0;
    opacity: 0;
}

.fadeIn{
    animation: 0.5 fadeIn forwards;
    animation-delay: 0.5s;
}

@keyframes fadeIn{
    to {
        scale: 1;
        opacity: 1;
    }
}


    </style>
</head>
<body>
    <header class="header">
        <a href="home.php" class="logo">KIYAVA</a>
        <nav class="navbar">
            <a href="home.php">Anasayfa</a>
            <a href="weather.php" class="active">Hava Durumu</a>
            <a href="clothes.php">Kıyafetler</a>
            <a href="contact.php">İletişim</a>
            <a href="index.php">Çıkış Yap</a>
        </nav>
    </header>
    <div class="container">
        <div class="search-box">
            <i class="fa-solid fa-location-dot"></i>
            <input type="text" placeholder="Lokasyon Seçin">
            <button class="fa-solid fa-magnifying-glass"></button>
        </div>
        <div class="not-found">
            <img src="img/kiyavaLogo.png">
            <p>Uff! Bi hata oluştu :/</p>
        </div>
        <div class="weather-box">
            <img src="">
            <p class="temperature"></p>
            <p class="description"></p>
        </div>
        <div class="weather-details">
            <div class="humidity">
                <i class="fa-solid fa-water">
                    <div class="text">
                        <span></span>
                        <p>Nem</p>
                    </div>
                </i>
            </div>
            <div class="wind">
                <i class="fa-solid fa-wind">
                    <div class="text">
                        <span></span>
                        <p>Ruzgar Hizi</p>
                    </div>
                </i>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/7c8801c017.js" crossorign="anonymous"></script>
    <script src="weather.js"></script>
</body>
</html>

<!--
7. satır css kodu orijinal font-family: 'ROBOTO', Courier, monospace;
-->