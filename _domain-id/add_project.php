<?php
include 'db_connection.php';

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $type = $_POST['type'];

        $sql = "INSERT INTO projects (name, type) VALUES ('$name', '$type')";
        if (mysqli_query($conn, $sql)) {
            $projectId = mysqli_insert_id($conn);
            echo json_encode(['success' => true, 'projectId' => $projectId]);
        } else {
            throw new Exception('Error executing query: ' . mysqli_error($conn));
        }
    } else {
        throw new Exception('Invalid request method');
    }
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>
