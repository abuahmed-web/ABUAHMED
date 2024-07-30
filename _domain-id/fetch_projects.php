
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

// استعلام لجلب جميع المشاريع
$sql = "SELECT * FROM projects";
$result = $conn->query($sql);

// تحويل البيانات إلى JSON
$projects = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $projects[] = $row;
    }
}
echo json_encode($projects);

// إغلاق الاتصال
$conn->close();
?>
