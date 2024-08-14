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
