<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// Check if form data is received
if (empty($name) || empty($email) || empty($message)) {
    error_log("Form data is missing");
    die("Form data is missing");
}

// Sanitize input data
$name = $conn->real_escape_string($name);
$email = $conn->real_escape_string($email);
$message = $conn->real_escape_string($message);

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
if ($stmt === false) {
    error_log("Prepare failed: " . $conn->error);
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("sss", $name, $email, $message);

// Execute the statement
if ($stmt->execute()) {
    echo "Thank you for your message!";
} else {
    error_log("Error: " . $stmt->error);
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>