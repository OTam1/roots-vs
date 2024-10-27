jQuery(document).ready(function($){
    var owl = $('.ourventures').owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000, // Adjust the autoplay interval
        autoplaySpeed: 1000,   // Animation speed during autoplay
        loop: true,
        center: true,
        margin: 10,
        dots: false,
        drag: true,
        responsive: {
            0: { nav: false, items: 1 },
            600: { items: 3, margin: 20 },
            1000: { items: 5 },
            1600: { items: 5 },
            2000: { items: 5 },
            3000: { items: 7 }
        }
    });
    
    // Listen to 'changed' event and apply styles with animation
    owl.on('changed.owl.carousel', function(event) {
        updateItemStyles(event.item.index);
    });
    
    function updateItemStyles(centerIndex) {
        $('.ourventures .owl-item').removeClass('colored').addClass('grayscale');
        
        // Smoothly add 'colored' class to the new center item
        $('.ourventures .owl-item').eq(centerIndex).addClass('colored').removeClass('grayscale');
    }
    
    // Initial call to set styles on page load
    $(document).ready(function() {
        updateItemStyles($('.ourventures .owl-item.active.center').index());
    });
    
    // Flag to track centered item
    let centeredIndex = -1; // Track the currently centered index
    let centeredOnce = false; // Flag to indicate if the item has moved to the center once
    
    window.centerClickedItem = function(index, modalKey) {
        if (centeredIndex === index && centeredOnce) {
            // If the item is centered and previously centered, open the modal
            openModal(modalKey);
            centeredOnce = false; // Reset for future clicks
        } else {
            // Center the clicked item
            owl.trigger('to.owl.carousel', [index, 300]);
            owl.trigger('play.owl.autoplay');
    
            // Set centeredOnce only after the item is fully centered
            centeredIndex = index;
            centeredOnce = true;
        }
    }
    
    // Detect when a new item is centered by autoplay or user action
    owl.on('changed.owl.carousel', function(event) {
        const newCenteredIndex = event.item.index;
    
        // Update centeredIndex to the new center item and allow the modal to open on click
        if (newCenteredIndex !== centeredIndex) {
            centeredIndex = newCenteredIndex;
            centeredOnce = true; // Allow modal opening on first click for newly centered item
        }
    });
        
    
    // Stop autoplay on mouse enter
    $('.ourventures').on('mouseenter', '.item', function() {
        owl.trigger('stop.owl.autoplay');
    });
    
    // Restart autoplay on mouse leave
    $('.ourventures').on('mouseleave', '.item', function() {
        owl.trigger('play.owl.autoplay');
    });


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

