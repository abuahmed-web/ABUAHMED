<?php
header('Content-Type: application/json');

try {
    // Database settings
    $servername = "localhost";
    $username = "u681230832_ID_DOMAIN";
    $password = "c4U+s@gOWN9";
    $dbname = "u681230832_ID_DOMAIN";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check database connection
    if ($conn->connect_error) {
        throw new Exception('Connection failed: ' . $conn->connect_error);
    }

    // Get activation ID
    $blog_id = $_GET['blog_id'] ?? '';

    // Check ID
    if (empty($blog_id)) {
        echo json_encode(['success' => false, 'status' => 'غير مفعل']);
        exit();
    }

    // Check activation status
    $stmt = $conn->prepare('SELECT activation_status FROM activations WHERE domain_or_id = ?');
    if (!$stmt) {
        throw new Exception('Prepare failed: ' . $conn->error);
    }

    $stmt->bind_param('s', $blog_id); // Use 's' for string type, 'i' for integer type
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode(['success' => true, 'status' => $row['activation_status']]);
    } else {
        echo json_encode(['success' => false, 'status' => 'غير مفعل']);
    }

    $stmt->close();
    $conn->close();
} catch (Exception $e) {
    echo json_encode(['success' => false, 'status' => 'غير مفعل', 'error' => $e->getMessage()]);
}
?>
