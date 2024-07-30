<?php
header('Content-Type: application/json');

try {
    // استلام بيانات الطلب
    $domain = $_GET['domain'] ?? '';

    // تحقق من المدخلات
    if (empty($domain)) {
        echo json_encode(['success' => false, 'status' => 'غير مفعل']);
        exit();
    }

    $servername = "localhost";
    $username = "u681230832_ID_DOMAIN";
    $password = "c4U+s@gOWN9";
    $dbname = "u681230832_ID_DOMAIN";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // تحقق من اتصال قاعدة البيانات
    if ($conn->connect_error) {
        throw new Exception('Connection failed: ' . $conn->connect_error);
    }

    // التحقق من تفعيل الدومين
    $stmt = $conn->prepare('SELECT activation_status FROM activations WHERE domain_or_id = ?');
    if (!$stmt) {
        throw new Exception('Prepare failed: ' . $conn->error);
    }

    $stmt->bind_param('s', $domain);
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
