<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- Link to external CSS -->
    <link rel="stylesheet" href="css/portfolio.css">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts for typography -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- JavaScript for theme toggle and back-to-top functionality -->
    <script src="js/theme-toggle.js" defer></script>
</head>
<body>
    <!-- Scroll Indicator -->
    <div id="scroll-indicator"></div>

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
        <!-- Portfolio section -->
        <section id="portfolio">
            <h2>My Projects</h2>
            <div class="project-grid">
                <div class="project">
                    <a href="index.php?url=project/showProject1">
                        <img src="images/webdevelopment1.jpg" alt="Project 1">
                        <h3>Portfolio Web Page</h3>
                        <p>This is my first project where I made a portfolio page for all my upcoming projects.</p>
                        <p class="technologies"><strong>Technologies: HTML/CSS, JS, PHP and MYSQL</strong></p>
                        <p class="year"><strong>Year: 2024</strong></p>
                        <p class="client"><strong>Client: Education</strong></p>
                        <p class="status"><strong>Status: In Progress</strong></p>
                    </a>
                </div>
                <div class="project">
                    <a href="index.php?url=project/showNoProject">
                        <img src="images/project2.jpg" alt="Project 2">
                        <h3>Project 2</h3>
                        <p>Project is yet to be added.</p>
                        <p class="technologies"><strong>Technologies:</strong></p>
                        <p class="year"><strong>Year:</strong></p>
                        <p class="client"><strong>Client:</strong></p>
                        <p class="status"><strong>Status:</strong></p>
                    </a>
                </div>
                <div class="project">
                    <a href="index.php?url=project/showNoProject">
                        <img src="images/project3.jpg" alt="Project 3">
                        <h3>Project 3</h3>
                        <p>Project is yet to be added.</p>
                        <p class="technologies"><strong>Technologies:</strong></p>
                        <p class="year"><strong>Year:</strong></p>
                        <p class="client"><strong>Client:</strong></p>
                        <p class="status"><strong>Status:</strong></p>
                    </a>
                </div>
                <div class="project">
                    <a href="index.php?url=project/showNoProject">
                        <img src="images/project4.jpg" alt="Project 4">
                        <h3>Project 4</h3>
                        <p>Project is yet to be added.</p>
                        <p class="technologies"><strong>Technologies:</strong></p>
                        <p class="year"><strong>Year:</strong></p>
                        <p class="client"><strong>Client:</strong></p>
                        <p class="status"><strong>Status:</strong></p>
                    </a>
                </div>
                <div class="project">
                    <a href="index.php?url=project/showNoProject">
                        <img src="images/project5.jpg" alt="Project 5">
                        <h3>Project 5</h3>
                        <p>Project is yet to be added.</p>
                        <p class="technologies"><strong>Technologies:</strong></p>
                        <p class="year"><strong>Year:</strong></p>
                        <p class="client"><strong>Client:</strong></p>
                        <p class="status"><strong>Status:</strong></p>
                    </a>
                </div>
                <div class="project">
                    <a href="index.php?url=project/showNoProject">
                        <img src="images/project6.jpg" alt="Project 6">
                        <h3>Project 6</h3>
                        <p>Project is yet to be added.</p>
                        <p class="technologies"><strong>Technologies:</strong></p>
                        <p class="year"><strong>Year:</strong></p>
                        <p class="client"><strong>Client:</strong></p>
                        <p class="status"><strong>Status:</strong></p>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Back to Top button -->
    <button id="back-to-top" title="Back to top">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Footer section -->
    <footer>
        <p>&copy; 2024 Jordy Meijer. All rights reserved.</p>
    </footer>
</body>
</html>