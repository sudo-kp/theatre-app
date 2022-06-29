<!DOCTYPE html>
<html lang="en">
<head>
    @stack('styles')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

</head>
<body>
<header>
    <img class="dropbtn" onclick="myFunction()" src="images/menu-bar.svg">
    <div id="logo">
        <img src="/images/logo.svg" alt="logo">
    </div>
    <div id="label">
        <p>ТЕАТР СУЧАСНОГО МИСТЕЦТВА ДАХ</p>
        <!--<h1>МИСТЕЦТВА ДАХ</h1>-->
    </div>
    <div id="nav">
        <nav>
            <a href="/" class="selected-menu-item">ГОЛОВНА</a>
            <a href="/con">АФІША</a>
            <a href="/actors">АКТОРИ</a>
            <a href="#">КОНТАКТИ</a>
        </nav>
    </div>
</header>
<div id="myDropdown" class="dropdown-content">
    <a href="index.html">ГОЛОВНА</a>
    <a href="container.html" class="selected-menu-item-mob">АФІША</a>
    <a href="#">АКТОРИ</a>
    <a href="#">КОНТАКТИ</a>
</div>
@yield('content')

<footer>
    <div id="footer-image">
        <img id="footer-image-big" src="/images/footer.svg">
        <img id="footer-image992" src="/images/footer992.svg">
        <img id="footer-image768" src="/images/footer768.svg">
        <img id="footer-image575" src="/images/footer575.svg">
    </div>
    <div id="footer-logo-container">
        <img id="footer-logo" src="/images/footer-logo.svg">
    </div>
    <div id="footer-nav">
        <a href="#">Лінки</a>
        <a href="#">Вистави</a>
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

@stack('scripts')
</body>

</html>
