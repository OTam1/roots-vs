jQuery(document).ready(function($){
    gsap.config({nullTargetWarn:false});

    $('.partners').owlCarousel({
        autoplay: true,
        loop: true,
        margin: 5,
        dots:false,
        nav: true,
        navText: ["<img src='assets/img/left-arrow.png'>","<img src='assets/img/right-arrow.png'>"],        
        responsive: {
            0: {
                nav: false,
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            },
            2000: {
                items: 4
            }
        }
    });
    
});



document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
