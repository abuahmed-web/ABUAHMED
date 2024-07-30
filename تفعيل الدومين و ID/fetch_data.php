<?php
include 'db_connection.php';

try {
    // Fetch data from projects table
    $stmt = $conn->prepare("SELECT * FROM projects");
    $stmt->execute();
    
    $projects = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    
    echo json_encode($projects);
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
