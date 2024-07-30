<?php
header('Content-Type: application/json');

// إعدادات الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "u681230832_ID_DOMAIN";
$password = "c4U+s@gOWN9";
$dbname = "u681230832_ID_DOMAIN";

// إنشاء الاتصال
$mysqli = new mysqli($servername, $username, $password, $dbname);

// التحقق من وجود خطأ في الاتصال
if ($mysqli->connect_error) {
    echo json_encode(['success' => false, 'error' => 'Connection failed: ' . $mysqli->connect_error]);
    exit();
}

// استلام البيانات
$id = isset($_POST['id']) ? intval($_POST['id']) : 0;

if ($id <= 0) {
    echo json_encode(['success' => false, 'error' => 'Invalid ID']);
    exit();
}

// تحقق من وجود الـ ID
$sql = "SELECT activation_status FROM activations WHERE id = ?";
$stmt = $mysqli->prepare($sql);
if (!$stmt) {
    echo json_encode(['success' => false, 'error' => 'Prepare failed: ' . $mysqli->error]);
    exit();
}

$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $new_status = ($row['activation_status'] === 'مفعل') ? 'غير مفعل' : 'مفعل';
    
    // تحديث حالة التفعيل
    $sql = "UPDATE activations SET activation_status = ? WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    if (!$stmt) {
        echo json_encode(['success' => false, 'error' => 'Prepare failed: ' . $mysqli->error]);
        exit();
    }

    $stmt->bind_param("si", $new_status, $id);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'new_status' => $new_status]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Update failed: ' . $stmt->error]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'ID not found']);
}

$stmt->close();
$mysqli->close();
?>
