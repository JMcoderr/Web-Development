// Scroll progress indicator
window.addEventListener('scroll', () => {
    const scrollTop = document.documentElement.scrollTop;
    const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrollPercent = (scrollTop / scrollHeight) * 100;
    const scrollProgress = document.getElementById('scroll-progress');
    scrollProgress.style.width = `${scrollPercent}%`;
});

// Smooth scroll for back-to-top button and show on scroll
const backToTopButton = document.getElementById('back-to-top');
backToTopButton.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

window.addEventListener('scroll', () => {
    const scrollTop = document.documentElement.scrollTop;
    if (scrollTop > 250) {
        backToTopButton.style.display = 'block';
    } else {
        backToTopButton.style.display = 'none';
    }
});

// Theme toggle
const themeToggleCheckbox = document.getElementById('theme-toggle-checkbox');
const body = document.body;

themeToggleCheckbox.addEventListener('change', function () {
    if (themeToggleCheckbox.checked) {
        body.classList.add('dark-theme');
        body.classList.remove('light-theme');
        localStorage.setItem('theme', 'dark');
    } else {
        body.classList.add('light-theme');
        body.classList.remove('dark-theme');
        localStorage.setItem('theme', 'light');
    }
});

// Initialize the theme based on the saved preference
document.addEventListener('DOMContentLoaded', function () {
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        body.classList.add(savedTheme + '-theme');
        themeToggleCheckbox.checked = savedTheme === 'dark';
    } else {
        body.classList.add('light-theme');
    }
});

// Smooth scrolling for internal links
const links = document.querySelectorAll('a[href^="#"]');
for (const link of links) {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);
        if (targetElement) {
            targetElement.scrollIntoView({ behavior: 'smooth' });
        }
    });
};

// Handle contact form submission
document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Get form data
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;
    
    // Example: Log form data to the console (replace this with your form submission logic)
    console.log('Name:', name);
    console.log('Email:', email);
    console.log('Message:', message);
    
    // Clear the form
    document.getElementById('contact-form').reset();
});
