<?php

require_once __DIR__ . '/../core/database.php';

class ProjectModel {
    private $connection;

    public function __construct() {
        $this->connection = Database::getInstance();
    }

    public function getAllProjects() {
        $sql = "SELECT * FROM projects";
        $result = $this->connection->query($sql);

        $projects = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $projects[] = $row;
            }
        }

        return $projects;
    }

    public function getProjectById($id) {
        $stmt = $this->connection->prepare("SELECT * FROM projects WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

    public function addProject($name, $description, $image, $technologies, $features, $challenges, $improvements, $reflection, $githubLink) {
        $stmt = $this->connection->prepare("INSERT INTO projects (name, description, image, technologies, features, challenges, improvements, reflection, github_link) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $name, $description, $image, $technologies, $features, $challenges, $improvements, $reflection, $githubLink);
        return $stmt->execute();
    }

    public function updateProject($id, $name, $description, $image, $technologies, $features, $challenges, $improvements, $reflection, $githubLink) {
        $stmt = $this->connection->prepare("UPDATE projects SET name = ?, description = ?, image = ?, technologies = ?, features = ?, challenges = ?, improvements = ?, reflection = ?, github_link = ? WHERE id = ?");
        $stmt->bind_param("sssssssssi", $name, $description, $image, $technologies, $features, $challenges, $improvements, $reflection, $githubLink, $id);
        return $stmt->execute();
    }

    public function deleteProject($id) {
        $stmt = $this->connection->prepare("DELETE FROM projects WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}