<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Jordy Meijer - Portfolio</title>
    <!-- Link to external CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts for typography -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- JavaScript for theme toggle and back-to-top functionality -->
    <script src="js/theme-toggle.js" defer></script>
</head>
<body class="about-page">
    <!-- Header section with navigation -->
    <header>
        <div class="header-content">
            <nav>
                <!-- Profile image -->
                <img src="images/Portfolio.jpg" alt="Jordy Meijer">
                <!-- Your name -->
                <h1><?= $name; ?></h1> <!-- Dynamische naam -->
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
        <!-- About Me section -->
        <section id="about">
            <div class="container">
                <h2>About Me</h2>
                <div class="profile">
                    <p><?= $bio; ?></p> <!-- Dynamische bio -->
                </div>
                <div class="bio">
                    <p><?= $extraInfo; ?></p> <!-- Dynamische extra informatie -->
                </div>
                
                <!-- Skills summary -->
                <div class="skills-summary">
                    <h3>Skills</h3>
                    <ul>
                        <li><i class="fas fa-code"></i> <?= $skills['webDev']; ?></li> <!-- Dynamische skill -->
                        <li><i class="fab fa-js"></i> <?= $skills['js']; ?></li> <!-- Dynamische skill -->
                        <li><i class="fab fa-html5"></i> <?= $skills['htmlCss']; ?></li> <!-- Dynamische skill -->
                        <li><i class="fas fa-database"></i> <?= $skills['phpMysql']; ?></li> <!-- Dynamische skill -->
                    </ul>
                    <div class="progress-bar">
                        <div class="progress" style="width: <?= $skills['webDevProgress']; ?>%;">Web Development</div> <!-- Dynamische voortgang -->
                        <div class="progress" style="width: <?= $skills['jsProgress']; ?>%;">JavaScript</div> <!-- Dynamische voortgang -->
                        <div class="progress" style="width: <?= $skills['htmlCssProgress']; ?>%;">HTML & CSS</div> <!-- Dynamische voortgang -->
                        <div class="progress" style="width: <?= $skills['phpMysqlProgress']; ?>%;">PHP & MySQL</div> <!-- Dynamische voortgang -->
                    </div>
                </div>

                <!-- Experience and CV -->
                <div class="experience">
                    <h3>Experience</h3>
                    <p><?= $experience; ?></p> <!-- Dynamische ervaring -->
                    <a href="<?= $cvLink; ?>" class="view-portfolio-btn" download>Download My CV</a> <!-- Dynamische link naar CV -->
                </div>
            </div>
        </section>
        <!-- Back-to-top button -->
        <button id="back-to-top" title="Back to top">
            <i class="fas fa-chevron-up"></i>
        </button>
    </main>
    
    <!-- Footer section -->
    <footer>
        <p>&copy; 2024 <?= $name; ?>. All rights reserved.</p>
    </footer>
</body>
</html>