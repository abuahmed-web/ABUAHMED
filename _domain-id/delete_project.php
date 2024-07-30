<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "u681230832_ID_DOMAIN";
$password = "c4U+s@gOWN9";
$dbname = "u681230832_ID_DOMAIN";

$response = array('success' => false);

try {
    if (isset($_POST['id'])) {
        $id = intval($_POST['id']); // تأكد من تحويل id إلى عدد صحيح

        // رسالة تصحيحية
        error_log("ID Received: " . $id);

        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // تحقق من وجود السجل
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM projects WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $count = $stmt->fetchColumn();
        error_log("Record Count: " . $count);

        if ($count == 0) {
            $response['error'] = 'No record found with the given ID';
            echo json_encode($response);
            exit();
        }

        // بدء المعاملة
        $pdo->beginTransaction();

        // حذف التحويلات المرتبطة بالمشروع
        $stmt = $pdo->prepare("DELETE FROM activations WHERE project_id = :id");
        $stmt->execute(['id' => $id]);

        // حذف المشروع
        $stmt = $pdo->prepare("DELETE FROM projects WHERE id = :id");
        $stmt->execute(['id' => $id]);

        if ($stmt->rowCount() > 0) {
            $pdo->commit();
            $response['success'] = true;
        } else {
            $pdo->rollBack();
            $response['error'] = 'Failed to delete record';
        }
    } else {
        $response['error'] = 'Missing id';
    }
} catch (Exception $e) {
    if ($pdo->inTransaction()) {
        $pdo->rollBack();
    }
    $response['error'] = 'Error: ' . $e->getMessage();
} finally {
    $pdo = null; // إغلاق الاتصال بقاعدة البيانات
}

echo json_encode($response);
?>
