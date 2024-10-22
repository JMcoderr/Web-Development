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

    // Show/hide back-to-top button
    window.addEventListener('scroll', function() {
        const backToTopButton = document.getElementById('back-to-top');
        if (window.scrollY > 300) {
            backToTopButton.style.display = 'block';
        } else {
            backToTopButton.style.display = 'none';
        }
    });

    // Scroll to top when the button is clicked
    document.getElementById('back-to-top').addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
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

    // Show/hide filter section
    document.getElementById('filter-btn').addEventListener('click', () => {
        const filterSection = document.getElementById('filter-section');
        if (filterSection.style.display === 'none' || filterSection.style.display === '') {
            filterSection.style.display = 'block';
        } else {
            filterSection.style.display = 'none';
        }
    });
});

// Function to filter projects based on selected checkboxes
function filterProjects() {
    const checkboxes = document.querySelectorAll('.filter-group input[type="checkbox"]');
    const projects = document.querySelectorAll('.project-item');
    const filters = {
        category: [],
        date: [],
        client: [],
        status: []
    };

    checkboxes.forEach(checkbox => {
        if (checkbox.checked) {
            const value = checkbox.value;
            if (['html-css', 'js', 'php', 'mysql'].includes(value)) {
                filters.category.push(value);
            } else if (['2023', '2024', '2025'].includes(value)) {
                filters.date.push(value);
            } else if (['personal', 'education'].includes(value)) {
                filters.client.push(value);
            } else if (['completed', 'in-progress', 'prototype'].includes(value)) {
                filters.status.push(value);
            }
        }
    });

    projects.forEach(project => {
        const category = project.dataset.category;
        const date = project.dataset.date;
        const client = project.dataset.client;
        const status = project.dataset.status;

        const categoryMatch = filters.category.length === 0 || filters.category.includes(category);
        const dateMatch = filters.date.length === 0 || filters.date.includes(date);
        const clientMatch = filters.client.length === 0 || filters.client.includes(client);
        const statusMatch = filters.status.length === 0 || filters.status.includes(status);

        if (categoryMatch && dateMatch && clientMatch && statusMatch) {
            project.style.display = 'block';
        } else {
            project.style.display = 'none';
        }
    });
}

// Back-to-top button functionality
const backToTopButton = document.getElementById('back-to-top');
window.addEventListener('scroll', () => {
    if (window.pageYOffset > 100) {
        backToTopButton.style.display = 'block';
    } else {
        backToTopButton.style.display = 'none';
    }
});

backToTopButton.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

// Theme toggle functionality
document.getElementById('light-mode').addEventListener('click', () => {
    document.documentElement.classList.remove('dark-theme');
    document.documentElement.classList.add('light-theme');
    localStorage.setItem('theme', 'light');
});

document.getElementById('dark-mode').addEventListener('click', () => {
    document.documentElement.classList.remove('light-theme');
    document.documentElement.classList.add('dark-theme');
    localStorage.setItem('theme', 'dark');
});