// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Add animation classes to elements as they enter viewport
    const animateOnScroll = function() {
        const elements = document.querySelectorAll('.feature-item, .step-item, .hero-content, .app-text, .device-images img');
        
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;
            
            if (elementPosition < screenPosition) {
                if (element.classList.contains('feature-item') || element.classList.contains('app-text')) {
                    element.classList.add('fade-in');
                } else {
                    element.classList.add('slide-up');
                }
            }
        });
    };
    
    // Run once on page load
    animateOnScroll();
    
    // Run on scroll
    window.addEventListener('scroll', animateOnScroll);
    
    // Toggle between login and register
    const toggleOptions = document.querySelectorAll('.toggle-option');
    toggleOptions.forEach(option => {
        option.addEventListener('click', function() {
            toggleOptions.forEach(opt => opt.classList.remove('toggle-active'));
            this.classList.add('toggle-active');
        });
    });
    
    // CTA button effect
    const ctaButtons = document.querySelectorAll('.cta-button');
    ctaButtons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px)';
            this.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = 'none';
        });
    });
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Mobile menu toggle functionality (if needed for smaller screens)
    // This would be expanded based on your mobile navigation needs
    function setupMobileMenu() {
        // This is a placeholder for mobile menu functionality
        // You would add a hamburger menu button and toggle the nav-links visibility
        
        // Example (uncommenting and implementing this depends on your HTML structure):
        const mobileMenuButton = document.createElement('div');
        mobileMenuButton.classList.add('mobile-menu-toggle');
        mobileMenuButton.innerHTML = '☰';
        
        const nav = document.querySelector('nav');
        const navLinks = document.querySelector('.nav-links');
        
        nav.insertBefore(mobileMenuButton, navLinks);
        
        mobileMenuButton.addEventListener('click', function() {
            navLinks.classList.toggle('show');
        });
        
    }
    
    // Check viewport width and setup mobile menu if needed
    function checkViewport() {
        if (window.innerWidth < 768) {
            setupMobileMenu();
        }
    }
    
    // Check on load
    checkViewport();
    
    // Recalculate on resize (with debounce for performance)
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(checkViewport, 250);
    });
});