/**
 * Navigation: Mobile hamburger toggle, smooth scroll
 */

document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    const navLinks = document.querySelectorAll('.nav-link');

    // Hamburger toggle
    if (hamburger) {
        hamburger.addEventListener('click', function() {
            const isOpen = mobileMenu.classList.contains('open');
            if (isOpen) {
                mobileMenu.classList.remove('open');
                hamburger.classList.remove('active');
            } else {
                mobileMenu.classList.add('open');
                hamburger.classList.add('active');
            }
        });
    }

    // Close menu on link click
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.remove('open');
            if (hamburger) hamburger.classList.remove('active');
        });
    });

    // Navbar background on scroll
    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('w-nav-scrolled');
            } else {
                navbar.classList.remove('w-nav-scrolled');
            }
        }, { passive: true });
    }
});
