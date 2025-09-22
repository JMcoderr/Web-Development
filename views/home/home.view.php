<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jordy Meijer - Portfolio</title>
    <!-- Link to external CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts for typography -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- JavaScript for theme toggle and back-to-top functionality -->
    <script src="js/theme-toggle.js" defer></script>
</head>
<body>
    <!-- Scroll Progress Indicator -->
    <div id="scroll-progress"></div>
    <!-- Header section with navigation -->
    <header>
        <div class="header-content">
            <nav>
                <!-- Profile image -->
                <img src="images/Portfolio.jpg" alt="Jordy Meijer">
                <!-- Your name -->
                <h1>Jordy Meijer</h1>
                <!-- Navigation links -->
                <ul>
                    <li><a href="index.php?url=home/index">Home</a></li>
                    <li><a href="index.php?url=about/index">About Me</a></li>
                    <li><a href="index.php?url=project/index">Projects</a></li>
                    <li><a href="index.php?url=contact/index">Contact</a></li>
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
        <!-- Home section -->
        <section id="home">
            <div class="home-content">
                <div class="intro-text">
                    <h1>I'm Jordy Meijer</h1>
                    <h2>Software Developer</h2>
                    <p>I'm a student at Windesheim Flevoland. I am 20 years old and I live in Almere. Thank you for visiting my portfolio website.</p>
                    <!-- Button to view portfolio -->
                    <a href="index.php?url=project/index" class="view-portfolio-btn">View Portfolio</a>
                </div>
                <!-- New image -->
                <img src="images/codepicture.jpg" alt="Code Picture" class="code-image">
            </div>
        </section>
    </main>

    <!-- Footer section -->
    <footer>
        <p>&copy; 2024 Jordy Meijer. All rights reserved.</p>
    </footer>

    <!-- Back-to-Top Button -->
    <button id="back-to-top"><i class="fas fa-arrow-up"></i></button>

    <!-- Link to external JavaScript file -->
    <script src="/js/script.js"></script>
</body>
</html>