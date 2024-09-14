jQuery(document).ready(function($){
$('.ourventures').owlCarousel({
    autoplay: true,
    loop: true,
    margin: 5,
    dots:false,
    drag:true,
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

// function openModal(content) {
//     document.getElementById('modal-body').innerHTML = `
//         <h2>${content}</h2>
//         <p>Modal content for ${content} goes here. Customize this content as needed.</p>
//     `;
//     document.getElementById('modal').style.display = "block";
// }

// function closeModal() {
//     document.getElementById('modal').style.display = "none";
// }

// // Close the modal when the user clicks anywhere outside of the modal content
// window.onclick = function(event) {
//     if (event.target == document.getElementById('modal')) {
//         closeModal();
//     }
// }

// document.querySelectorAll('.item-sf').forEach(item => {
//     item.addEventListener('mouseenter', () => {
//         gsap.to('.item-sf', { flex: 0.26, duration: 0.2 });
//         gsap.to(item, { flex: 3.90, duration: 0.2 });
//         gsap.to('.center-title', { opacity: 0, duration: 0.2 });
//     });

//     item.addEventListener('mouseleave', () => {
//         gsap.to('.item-sf', { flex: 1, duration: 0.2 });
//         gsap.to('.center-title', { opacity: 1, duration: 0.2 });
//     });
// });


document.querySelectorAll('.item-sf').forEach(item => {
    item.addEventListener('mouseenter', () => {
        gsap.to('.item-sf', { flex: 0.46, duration: 0.2 });
        gsap.to(item, { flex: 3.00, duration: 0.2 });
        gsap.to('.center-title', { opacity: 0, duration: 0.2 });
    });

    item.addEventListener('mouseleave', () => {
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

