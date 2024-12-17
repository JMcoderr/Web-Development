<?php

class ContactController {

    public function index() {
        // Load the contact view
        require_once __DIR__ . '/../views/contact/contact.view.php';
    }

    public function submit() {
        // Enable error reporting
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        // Get the database connection instance
        require_once __DIR__ . '/../core/database.php';
        $connection = Database::getInstance();

        // Check the connection
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        // Get form data
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $message = $_POST['message'] ?? '';

        // Check if form data is received
        if (empty($name) || empty($email) || empty($message)) {
            die("Form data is missing");
        }

        // Sanitize input data
        $name = $connection->real_escape_string($name);
        $email = $connection->real_escape_string($email);
        $message = $connection->real_escape_string($message);

        // Prepare and bind
        $stmt = $connection->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
        if ($stmt === false) {
            die("Prepare failed: " . $connection->error);
        }

        $stmt->bind_param("sss", $name, $email, $message);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Thank you for your message!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $connection->close();
    }
}