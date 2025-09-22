<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Jordy Meijer - Portfolio</title>
    <!-- Link to external CSS -->
    <link rel="stylesheet" href="css/contact.css">
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
        <!-- Contact section -->
        <section id="contact">
            <h2>Contact Me</h2>
            <p>If you would like to get in touch, please feel free to reach out to me through the following channels:</p>
            <ul class="contact-list">
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:Jmeijer04@Hotmail.com">Jmeijer04@Hotmail.com</a>
                </li>
                <li>
                    <i class="fab fa-linkedin"></i>
                    <a href="https://www.linkedin.com/in/jordy-meijer-4a3bb7221/" target="_blank">Jordy Meijer</a>
                </li>
                <li>
                    <i class="fab fa-github"></i>
                    <a href="https://github.com/JMcoderr" target="_blank">JMcoderr</a>
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    <a href="tel:+316-10609212">+316-10609212</a>
                </li>
            </ul>
            <form id="contact-form" action="index.php?url=contact/submit" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                
                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>
    
    <!-- Footer section -->
    <footer>
        <p>&copy; 2024 Jordy Meijer. All rights reserved.</p>
    </footer>
    <script>
        // Handle form submission using Fetch API
        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission
    
            // Get form data
            var formData = new FormData(this);
    
            // Send form data using Fetch API
            fetch('index.php?url=contact/submit', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(data => {
                // Display the response from the server
                alert(data);
            })
            .catch(error => {
                console.error('Error:', error);
                alert('There was a problem with your submission. Please try again.');
            });
        });
    
        // Theme toggle functionality
        document.getElementById('theme-toggle-checkbox').addEventListener('change', function() {
            if (this.checked) {
                document.documentElement.classList.add('dark-theme');
                localStorage.setItem('theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark-theme');
                localStorage.setItem('theme', 'light');
            }
        });
    
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'dark') {
            document.documentElement.classList.add('dark-theme');
            document.getElementById('theme-toggle-checkbox').checked = true;
        }
    </script>
</body>
</html>