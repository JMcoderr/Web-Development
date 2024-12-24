<?php

class AboutController {

    public function index() {
        // Stel de variabelen voor de view in
        $name = "Jordy Meijer";
        $bio = "Hello! I'm Jordy Meijer, a passionate software developer student at Windesheim Flevoland. I love coding and enjoy learning new technologies.";
        $extraInfo = "In my free time, I enjoy working out, spending time with my family and friends, working on personal projects, and continuously learning new things.";
        
        $skills = [
            'webDev' => 'Web Development',
            'js' => 'JavaScript',
            'htmlCss' => 'HTML & CSS',
            'phpMysql' => 'PHP & MySQL',
            'webDevProgress' => 60,
            'jsProgress' => 50,
            'htmlCssProgress' => 80,
            'phpMysqlProgress' => 60
        ];
        
        $experience = "While I have not yet built any real web applications or websites, I have worked on various projects as part of my studies and personal development. My experience includes front-end and back-end development.";
        $cvLink = "/public/cv/Jordy_Meijer_CV_2024.pdf";
        
        // Laad de view en geef de variabelen door
        require_once __DIR__ . '/../views/about/about.view.php';
    }
}