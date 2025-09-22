<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $projectName; ?> - Portfolio Website</title>
    <!-- Link to external CSS -->
    <link rel="stylesheet" href="css/project.css">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts for typography -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- JavaScript for theme toggle and back-to-top functionality -->
    <script src="js/theme-toggle.js" defer></script>
</head>
<body>
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
        <!-- Project 1 details -->
        <section id="project1">
            <h2><?php echo $projectName; ?></h2>
            <div class="project-details">
                <img src="images/<?php echo $projectImage; ?>" alt="<?php echo $projectName; ?>" class="project-image">
                <div class="project-info">
                    <h3>Project Overview</h3>
                    <p><?php echo $projectDescription; ?></p>
                    
                    <h3>Technologies Used</h3>
                    <ul>
                        <?php foreach ($technologies as $technology): ?>
                            <li><?php echo $technology; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    
                    <h3>Features</h3>
                    <ul>
                        <?php foreach ($features as $feature): ?>
                            <li><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    
                    <h3>Challenges and Solutions</h3>
                    <p><?php echo $projectChallenges; ?></p>
                    
                    <h3>Future Improvements</h3>
                    <p><?php echo $projectImprovements; ?></p>
                    
                    <h3>Reflection</h3>
                    <p><?php echo $projectReflection; ?></p>

                    <a href="<?php echo $githubLink; ?>" class="github-link" target="_blank">
                        <i class="fab fa-github"></i> View on GitHub
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