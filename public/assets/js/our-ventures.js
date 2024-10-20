jQuery(document).ready(function($){
    var owl = $('.ourventures').owlCarousel({
        autoplay: true,
        loop: true,
        center: true,  // Add this line
        margin: 10,
        dots: false,
        drag: true,
        responsive: {
            0: {
                nav: false,
                items: 1
            },
            600: {
                items: 3,
                margin: 20,
            },
            1000: {
                items: 5,
            },
            1600: {
                items: 5,
            },
            2000: {
                items: 5,
            }
        }
    });

    // Add these event listeners
    owl.on('changed.owl.carousel', function(event) {
        updateItemStyles(event.item.index);
    });

    function updateItemStyles(centerIndex) {
        $('.ourventures .owl-item').removeClass('colored').addClass('grayscale');
        $('.ourventures .owl-item').eq(centerIndex).addClass('colored').removeClass('grayscale');
    }

    // Initial call to set styles
    updateItemStyles($('.ourventures .owl-item.active.center').index());



// document.querySelectorAll('.item-sf').forEach(item => {
//     item.addEventListener('mouseenter', () => {
//         gsap.to('.item-sf', { flex: 0.46, duration: 0.2 });
//         gsap.to(item, { flex: 3.00, duration: 0.2 });
//         gsap.to('.center-title', { opacity: 0, duration: 0.2 });
//     });

//     item.addEventListener('mouseleave', () => {
//         gsap.to('.item-sf', { flex: 1, duration: 0.2 });
//         gsap.to('.center-title', { opacity: 1, duration: 0.2 });
//     });
// });
// document.querySelectorAll('.item-sf').forEach(item => {
//     item.addEventListener('click', () => {
//         if (window.innerWidth <= 1000) {
//             const isActive = item.classList.contains('active');
//             document.querySelectorAll('.item-sf').forEach(i => i.classList.remove('active'));
//             if (!isActive) {
//                 item.classList.add('active');
//             }
//         }
//     });
// });

document.querySelectorAll('.item-sf').forEach(item => {
    item.addEventListener('mouseenter', () => {
        if (window.innerWidth > 1000) {
            item.classList.add('active-sf'); // Add the active-sf class for screens > 1000px
        }
        gsap.to('.item-sf', { flex: 0.46, duration: 0.2 });
        gsap.to(item, { flex: 3.00, duration: 0.2 });
        gsap.to('.center-title', { opacity: 0, duration: 0.2 });
    });

    item.addEventListener('mouseleave', () => {
        if (window.innerWidth > 1000) {
            item.classList.remove('active-sf'); // Remove the active-sf class for screens > 1000px
        }
        gsap.to('.item-sf', { flex: 1, duration: 0.2 });
        gsap.to('.center-title', { opacity: 1, duration: 0.2 });
    });
});

document.querySelectorAll('.item-sf').forEach(item => {
    item.addEventListener('click', () => {
        if (window.innerWidth <= 1000) {
            const isActive = item.classList.contains('active');
            document.querySelectorAll('.item-sf').forEach(i => i.classList.remove('active'));
            if (!isActive) {
                item.classList.add('active');
            }
        }
    });
});


});

