<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/landing.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ТЕАТР ДАХ</title>

</head>
<body>
<header>
    <img class="dropbtn" onclick="myFunction()" src="images/menu-bar.svg">
    <div id="logo">
        <img src="images/logo.svg" alt="logo">
    </div>
    <div id="label">
        <p>ТЕАТР СУЧАСНОГО МИСТЕЦТВА ДАХ</p>
        <!--<h1>МИСТЕЦТВА ДАХ</h1>-->
    </div>
    <div id="nav">
        <nav>
            <a href="index.html" class="selected-menu-item">ГОЛОВНА</a>
            <a href="/con">АФІША</a>
            <a href="#">АКТОРИ</a>
            <a href="#">КОНТАКТИ</a>
        </nav>
    </div>
    <div id="cart">
        <img src="images/cart.svg" alt="cart">
    </div>
</header>


<div id="myDropdown" class="dropdown-content">
    <a href="index.html" class="selected-menu-item-mob">ГОЛОВНА</a>
    <a href="container.html">АФІША</a>
    <a href="#">АКТОРИ</a>
    <a href="#">КОНТАКТИ</a>
</div>

<div class="slideshow-container">
    <div class="slide fade">
        <img src="images/show1.png">
        <div class="slider-info-box">
            <h2 class="play-name">«Стус: Перехожий»</h2>
            <h5 class="play-description">Камерна опера</h5>
            <a class="tickets-button" href="informational.html">Квитки</a>
        </div>
    </div>

    <div class="slide fade">
        <img src="images/zaratustra.png">
        <div class="slider-info-box">
            <h2 class="play-name">ПРО ЩО КАЗАВ ЗАРАТУСТРА</h2>
            <h5 class="play-description">Театральні уроки</h5>
            <a class="tickets-button" href="#">Квитки</a>
        </div>
    </div>

    <div class="slide fade">
        <img src="images/show3.png">
        <div class="slider-info-box">
            <h2 class="play-name">Сповідь або «Крові прагну»</h2>
            <h5 class="play-description">Моновистава</h5>
            <a class="tickets-button" href="#">Квитки</a>
        </div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<div class="slideshow-container-mobile">

    <div class="slide-mobile fade">
        <img src="images/zaratustra.png">
        <h2 class="play-name-mobile">ПРО ЩО КАЗАВ ЗАРАТУСТРА</h2>
        <h5 class="play-description-mobile">Театральні уроки</h5>
    </div>

    <div class="slide-mobile fade">
        <img src="images/show1.png">
        <h2 class="play-name-mobile">«Стус: Перехожий»</h2>
        <h5 class="play-description-mobile">Камерна опера</h5>
    </div>

    <div class="slide-mobile fade">
        <img src="images/show3.png">
        <h2 class="play-name-mobile">Сповідь або «Крові прагну»</h2>
        <h5 class="play-description-mobile">Моновистава</h5>
    </div>

</div>

<div id="dots" style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<div id="tiles-container">
    <h2>НАШІ ПРОЕКТИ</h2>
    <div id="tiles">
        <div class="item"><img src="images/daughters.png" alt="dakh daughters">AIR</div>
        <div class="item"><img src="images/tsesho.png" alt="tse sho">TSE SHO</div>
        <div class="item"><img src="images/dahabraha.png" alt="dakhabrakha">DAKHABRAKHA</div>
        <div class="item"><img src="images/gogol.png" alt="gogol fest">GOGOL FEST</div>
        <div class="item"><img src="images/novaopera.png" alt="nova opera">NOVA OPERA</div>
        <div class="item"><img src="images/band.png" alt="dakh daughters band">DAKH DAUGHTERS</div>
    </div>
</div>

<div id="founder-container">
    <img src="images/founder.png" alt="Влад Троїцький">
    <span>Засновник театру - Владислав Троїцький</span>
</div>

<div id="history-container">

    <h2>
        ДАХ ІСТОРІЯ
    </h2>

    <img id="scrb" src="images/scrible.svg">
    <img id="scrb2" src="images/scribble.svg">

    <div id="text-scribble">
        Театр сучасного мистецтва “Дах” відкрито людиною,
        яка на той момент не пов’язувала свою долю із
        наміром серйозно займатись театром і мистецтвом.
        Створене він називав «готелем мистецтв»,

    </div>

    <img src="images/hist1.png">

    <div>
        своєрідним відкритим майданчиком на ім’я «ДАХ»,
        символом якого став равлик, що «повзе схилами
        Фудзі», «тихо до самої вершини», — вона і стала
        не лише символом, але й образом принципів,
    </div>
    <img src="images/hist2.png">

    <div>
        закладених у суть цього шансу, подарованого
        долею», як каже засновник «ДАХу» Владислав
        Троїцький, за гороскопом Стрілець i Дракон,
        — «образом духовних принципів, закладених у мою
        свідомість в далекому дитинстві буддистською
        Бурятією
    </div>
    <img src="images/hist3.png">
</div>

<h2 id="play-heading">
    НАШІ ВИСТАВИ
</h2>

<div id="play-photo-container">
    <img src="images/play1.png">
    <img src="images/play2.png">
    <img src="images/play3.png">
</div>

<div id="poster-link-container">
    <a href="container.html" id="poster-link">Перейти до афіші</a>
</div>




<footer>
    <div id="footer-image">
        <img id="footer-image-big" src="images/footer.svg">
        <img id="footer-image992" src="images/footer992.svg">
        <img id="footer-image768" src="images/footer768.svg">
        <img id="footer-image575" src="images/footer575.svg">
    </div>
    <div id="footer-logo-container">
        <img id="footer-logo" src="images/footer-logo.svg">
    </div>
    <div id="footer-nav">
        <a href="#">Лінки</a>
        <a href="#">Встави</a>
        <a href="#">Фестивалі</a>
        <a href="#">Історія</a>
    </div>
    <div id="socials">
        <a href="#"><ion-icon name="call-outline"></ion-icon></a>
        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
        <a href="#"><ion-icon name="mail-outline"></ion-icon></a>
    </div>
    <div id="info">
        <p>Наша адреса:</p>
        <p>м.Київ,</p>
        <p>вул.Велика Васильківська, 136.</p>
        <p>тел\факс: (044) 529-40-62</p>
    </div>
</footer>



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="js/gallery.js"></script>
<script src="js/m-gallery.js"></script>
<script src="js/menu.js"></script>
</body>

</html>
