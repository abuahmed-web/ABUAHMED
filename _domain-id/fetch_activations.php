<?php
// إعداد الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "u681230832_ID_DOMAIN";
$password = "c4U+s@gOWN9";
$dbname = "u681230832_ID_DOMAIN";

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// الحصول على معرف المشروع من طلب GET
$projectId = intval($_GET['projectId']);

// استعلام لجلب التفعيلات بناءً على معرف المشروع
$sql = "SELECT * FROM activations WHERE project_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $projectId);
$stmt->execute();
$result = $stmt->get_result();

// تحويل البيانات إلى JSON
$activations = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $activations[] = $row;
    }
}
echo json_encode($activations);

// إغلاق الاتصال
$stmt->close();
$conn->close();
?>




