/**
 * Navigation: Mobile hamburger toggle, smooth scroll, scroll spy
 */

document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    const navbar = document.getElementById('navbar');

    // Hamburger toggle
    if (hamburger && mobileMenu) {
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

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href*="#"]').forEach(function(link) {
        link.addEventListener('click', function(e) {
            var href = this.getAttribute('href');
            var hash = href.substring(href.indexOf('#'));

            if (!hash || hash === '#') return;

            var target = document.querySelector(hash);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth' });

                // Close mobile menu if open
                if (mobileMenu) {
                    mobileMenu.classList.remove('open');
                    if (hamburger) hamburger.classList.remove('active');
                }

                // Update URL hash without scrolling
                history.pushState(null, null, hash);
            }
        });
    });

    // Navbar background on scroll
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('w-nav-scrolled');
            } else {
                navbar.classList.remove('w-nav-scrolled');
            }
        }, { passive: true });
    }

    // Scroll spy — highlight active nav link
    var sections = ['inicio', 'mis-libros', 'sobre-mi', 'servicios', 'contacto'];
    var navLinks = document.querySelectorAll('.nav-link');

    function updateActiveLink() {
        var scrollPos = window.scrollY + 150;
        sections.forEach(function(id) {
            var section = document.getElementById(id);
            if (section) {
                var top = section.offsetTop;
                var bottom = top + section.offsetHeight;
                navLinks.forEach(function(link) {
                    if (link.getAttribute('href') && link.getAttribute('href').includes('#' + id)) {
                        if (scrollPos >= top && scrollPos < bottom) {
                            link.style.color = 'var(--w-burgundy-l)';
                        } else {
                            link.style.color = '';
                        }
                    }
                });
            }
        });
    }

    window.addEventListener('scroll', updateActiveLink, { passive: true });
    updateActiveLink();
});
