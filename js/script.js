// script.js

document.addEventListener('DOMContentLoaded', function() {
    // Theme toggle functionality
    document.getElementById('light-mode').addEventListener('click', function() {
        document.documentElement.classList.remove('dark-theme');
        document.documentElement.classList.add('light-theme');
        localStorage.setItem('theme', 'light');
    });

    document.getElementById('dark-mode').addEventListener('click', function() {
        document.documentElement.classList.remove('light-theme');
        document.documentElement.classList.add('dark-theme');
        localStorage.setItem('theme', 'dark');
    });

    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        document.documentElement.classList.add(savedTheme + '-theme');
    } else {
        document.documentElement.classList.add('light-theme');
    }

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
    }
});

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

