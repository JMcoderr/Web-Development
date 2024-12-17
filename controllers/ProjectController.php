<?php

class ProjectController {

    public function index() {
        // Load the portfolio view
        require_once __DIR__ . '/../views/projects/portfolio.view.php';
    }

    public function showProject1() {
        // Project 1 gegevens
        $projectName = "Portfolio Web Page";
        $projectImage = "webdevelopment1.jpg";
        $projectDescription = "This project showcases a portfolio website with a modern design and smooth scrolling. It includes sections for home, about me, projects, and contact. The website is fully responsive and features a dark/light theme toggle for better user experience. The goal was to create a visually appealing and user-friendly platform to display my work and skills.";
        $technologies = ["HTML5", "CSS3", "JavaScript", "MySQL/PHP", "Font Awesome", "Google Fonts"];
        $features = ["Responsive design", "Dark/Light theme toggle", "Smooth scrolling", "Interactive navigation", "Profile image and personal introduction"];
        $projectChallenges = "One challenge was ensuring the contact form integrated smoothly with the MySQL database. I created a PHP file to manage the connection and troubleshoot any issues during the setup. Testing in XAMPP helped me identify and resolve errors before deploying the website.";
        $projectImprovements = "Future improvements could include adding more interactive elements such as animations and transitions, integrating a blog section, and enhancing the contact form with validation and backend integration. Additionally, I plan to continuously update the portfolio with new projects and skills as I progress in my career.";
        $projectReflection = "Building this portfolio has been a rewarding experience, combining both my technical skills and creativity. It allowed me to apply what I've learned in HTML, CSS, JavaScript, PHP, and MySQL and creating a digital space I'm proud to share with others.";
        $githubLink = "https://github.com/JMcoderr/Web-Development";

        // Load the project1-view.php and pass the project data
        require_once __DIR__ . '/../views/projects/project1-view.php';
    }

    public function showEmptyProject() {
        $projectName = "Empty Project";
        
        // Load the empty project view
        require_once __DIR__ . '/../views/projects/empty-project-template.php';
    }

    public function showNoProject() {
        $projectName = "No Project Added Yet";
        
        // Load the no project view
        require_once __DIR__ . '/../views/projects/no-project.view.php';
    }
}