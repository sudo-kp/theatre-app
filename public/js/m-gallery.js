let slideIndexMob = 0;
showSlidesMobile();

function showSlidesMobile() {
    let i;
    let slides = document.getElementsByClassName("slide-mobile");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slideIndexMob++;
    if (slideIndexMob > slides.length) {slideIndexMob = 1}
    slides[slideIndexMob-1].style.display = "block";
    dots[slideIndexMob-1].className += " active";
    setTimeout(showSlidesMobile, 2000); // Change image every 2 seconds
}