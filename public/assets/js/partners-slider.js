jQuery(document).ready(function($){
    gsap.config({nullTargetWarn:false});

    $('.partners').owlCarousel({
        autoplay: true,
        loop: true,
        margin: 5,
        dots:false,
        nav: true,
        navText: ["<img style='width:10px' src='assets/img/left-arrow-b.png'>","<img style='width:10px' src='assets/img/right-arrow-b.png'>"],        
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
gsap.registerPlugin(ScrollTrigger);

gsap.from("#scrollto", {
  y: 50,               // Move up by 50px
  opacity: 0,           // Start with opacity 0
  duration: 1.5,        // Animation duration
  ease: "power2.out",   // Easing effect
  scrollTrigger: {
    trigger: "#scrollto",
    start: "top 80%",   // Trigger when the top of the section hits 80% of the viewport
    toggleActions: "play none none reverse",  // Play forward on enter, reverse on leave
  }
});
gsap.from(".responsive-container", {
    y: 50,               // Move up by 50px
    opacity: 0,           // Start with opacity 0
    duration: 1.5,        // Animation duration
    ease: "power2.out",   // Easing effect
    scrollTrigger: {
      trigger: ".responsive-container",
      start: "top 80%",   // Trigger when the top of the section hits 80% of the viewport
      toggleActions: "play none none reverse",  // Play forward on enter, reverse on leave
    }
  });

  gsap.from(".carousel-wrapper1", {
    y: 50,               // Move up by 50px
    opacity: 0,           // Start with opacity 0
    duration: 1.5,        // Animation duration
    ease: "power2.out",   // Easing effect
    scrollTrigger: {
      trigger: ".carousel-wrapper1",
      start: "top 80%",   // Trigger when the top of the section hits 80% of the viewport
      toggleActions: "play none none reverse",  // Play forward on enter, reverse on leave
    }
  });

  gsap.from(".sf-container", {
    y: 50,               // Move up by 50px
    opacity: 0,           // Start with opacity 0
    duration: 1.5,        // Animation duration
    ease: "power2.out",   // Easing effect
    scrollTrigger: {
      trigger: ".sf-container",
      start: "top 80%",   // Trigger when the top of the section hits 80% of the viewport
      toggleActions: "play none none reverse",  // Play forward on enter, reverse on leave
    }
  });
  gsap.from(".carousel-wrapper", {
    y: 50,               // Move up by 50px
    opacity: 0,           // Start with opacity 0
    duration: 1.5,        // Animation duration
    ease: "power2.out",   // Easing effect
    scrollTrigger: {
      trigger: ".carousel-wrapper",
      start: "top 80%",   // Trigger when the top of the section hits 80% of the viewport
      toggleActions: "play none none reverse",  // Play forward on enter, reverse on leave
    }
  });
  gsap.from("#co-contactus", {
    y: 50,               // Move up by 50px
    opacity: 0,           // Start with opacity 0
    duration: 1.5,        // Animation duration
    ease: "power2.out",   // Easing effect
    scrollTrigger: {
      trigger: "#co-contactus",
      start: "top 80%",   // Trigger when the top of the section hits 80% of the viewport
      toggleActions: "play none none reverse",  // Play forward on enter, reverse on leave
    }
  });