<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empty Project - Jordy Meijer</title>
    <!-- Link to external CSS -->
    <link rel="stylesheet" href="public/css/project.css">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts for typography -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- JavaScript for theme toggle and back-to-top functionality -->
    <script src="public/js/theme-toggle.js" defer></script>
</head>
<body>
    <!-- Header section with navigation -->
    <header>
        <div class="header-content">
            <nav>
                <!-- Profile image -->
                <img src="public/images/Portfolio.jpg" alt="Jordy Meijer">
                <!-- Your name -->
                <h1>Jordy Meijer</h1>
                <!-- Navigation links -->
                <ul>
                    <li><a href="index.html#home">Home</a></li>
                    <li><a href="about.html">About Me</a></li>
                    <li><a href="portfolio.html">Projects</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                <!-- Theme toggle buttons -->
                <div class="theme-toggle">
                    <input type="checkbox" id="theme-toggle-checkbox">
                    <label for="theme-toggle-checkbox" class="slider"></label>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main content section -->
    <main>
        <section id="no-project">
            <h2>Empty Project</h2>
            <p>Sorry, this project has not been added yet. Please check back later.</p>
            <a href="portfolio.html" class="view-portfolio-btn">Back to Portfolio</a>
        </section>
    </main>

    <!-- Footer section -->
    <footer>
        <p>&copy; 2024 Jordy Meijer. All rights reserved.</p>
    </footer>

    <!-- Back-to-Top Button -->
    <button id="back-to-top"><i class="fas fa-arrow-up"></i></button>

    <!-- Link to external JavaScript file -->
    <script src="public/js/script.js"></script>
</body>
</html>
