<?php
header('Content-Type: application/json');

try {
    // استلام بيانات الطلب
    $domain = $_GET['domain'] ?? '';
    $id = $_GET['id'] ?? '';

    // إعدادات قاعدة البيانات
    $servername = "localhost";
    $username = "u681230832_ID_DOMAIN";
    $password = "c4U+s@gOWN9";
    $dbname = "u681230832_ID_DOMAIN";

    // تحقق من المدخلات
    if (empty($domain) && empty($id)) {
        echo json_encode(['success' => false, 'status' => 'غير مفعل']);
        exit();
    }

    // إنشاء اتصال بقاعدة البيانات
    $conn = new mysqli($servername, $username, $password, $dbname);

    // تحقق من اتصال قاعدة البيانات
    if ($conn->connect_error) {
        throw new Exception('Connection failed: ' . $conn->connect_error);
    }

    // بناء استعلام للتحقق من التفعيل
    $sql = '';
    $param = '';

    if (!empty($domain)) {
        $sql = 'SELECT activation_status FROM activations WHERE domain_or_id = ? AND type = "domain"';
        $param = $domain;
    } elseif (!empty($id)) {
        $sql = 'SELECT activation_status FROM activations WHERE id = ?';
        $param = intval($id); // تحويل ID إلى عدد صحيح
    }

    if (empty($sql)) {
        throw new Exception('No valid parameter provided');
    }

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        throw new Exception('Prepare failed: ' . $conn->error);
    }

    $stmt->bind_param('s', $param); // أو استخدم 'i' في حالة ID
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
