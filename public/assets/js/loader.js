document.addEventListener('DOMContentLoaded', function () {
    const spinner = document.querySelector('.spinner');

    // Create the spinning animation with GSAP
    gsap.to(spinner, {
        rotation: 360,
        duration: 1,
        ease: "none",
        repeat: -1
    });

    window.addEventListener('load', function () {
        // Fade out the loader
        gsap.to('#loader', {
            opacity: 0,
            duration: 1,
            onComplete: function () {
                // Hide the loader after the fade-out
                document.getElementById('loader').style.display = 'none';
                // Show the main content
                document.getElementById('wrap').style.display = 'block';
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    function adjustDynamicHeights() {
        const dpr = window.devicePixelRatio || 1;

        // Check if the device pixel ratio is 1.5 (150% scaling)
        if (dpr >= 1.3 && dpr < 2 && !('ontouchstart' in window)) {
            const scaleFactor = 1 / dpr;  // Inverse of the scaling (0.67 for 150% scaling)

            // Adjust height dynamically for specific elements
            const scaledHeight = window.innerHeight / scaleFactor;
            document.querySelectorAll('.intro-section').forEach(element => {
                element.style.height = `${scaledHeight}px`;
            });
            const scaledHeight1 = window.innerHeight / scaleFactor;
            document.querySelectorAll('#co-contactus, .container-sf').forEach(element => {
                element.style.height = `120vh`; // Apply static height if needed
            });

            document.querySelectorAll('.responsive-container').forEach(element => {
                element.style.height = `110vh`; 
            });

        }
        // const dprphone = window.devicePixelRatio || 1;

        // // Check if the device pixel ratio is 1.5 (150% scaling)
        // if (dprphone === 1.5) {
            
        // }
    }

    // Call the function initially and on window resize
    window.addEventListener('resize', adjustDynamicHeights);
    adjustDynamicHeights(); // Run on page load
});
