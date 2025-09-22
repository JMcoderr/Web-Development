document.addEventListener('DOMContentLoaded', function () {
    // Get the theme toggle checkbox element
    const themeToggleCheckbox = document.getElementById('theme-toggle-checkbox');
    
    // Get the current theme from local storage or default to 'light'
    const currentTheme = localStorage.getItem('theme') || 'light';
    
    // Add the current theme class to the body
    document.body.classList.add(currentTheme + '-theme');

    // If the current theme is 'dark', check the theme toggle checkbox
    if (currentTheme === 'dark') {
        themeToggleCheckbox.checked = true;
    }

    // Add an event listener to the theme toggle checkbox
    themeToggleCheckbox.addEventListener('change', function () {
        // If the checkbox is checked, switch to dark theme
        if (this.checked) {
            document.body.classList.replace('light-theme', 'dark-theme');
            localStorage.setItem('theme', 'dark');
        } else {
            // If the checkbox is unchecked, switch to light theme
            document.body.classList.replace('dark-theme', 'light-theme');
            localStorage.setItem('theme', 'light');
        }
    });

    // Get the back-to-top button element
    const backToTopButton = document.getElementById('back-to-top');
    
    // Add a scroll event listener to the window
    window.addEventListener('scroll', () => {
        // Show the back-to-top button if scrolled down more than 300px
        if (window.scrollY > 300) {
            backToTopButton.style.display = 'block';
        } else {
            // Hide the back-to-top button if scrolled up less than 300px
            backToTopButton.style.display = 'none';
        }
    });

    // Add a click event listener to the back-to-top button
    backToTopButton.addEventListener('click', () => {
        // Smooth scroll to the top of the page
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});