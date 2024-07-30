<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "u681230832_ID_DOMAIN";
$password = "c4U+s@gOWN9";
$dbname = "u681230832_ID_DOMAIN";

$response = array('success' => false);

try {
    if (isset($_POST['activationId'])) {
        $activationId = intval($_POST['activationId']); // تأكد من تحويل activationId إلى عدد صحيح

        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // بدء المعاملة
        $pdo->beginTransaction();

        // حذف التفعيل
        $stmt = $pdo->prepare("DELETE FROM activations WHERE id = :activationId");
        $stmt->execute(['activationId' => $activationId]);

        if ($stmt->rowCount() > 0) {
            $pdo->commit();
            $response['success'] = true;
        } else {
            $pdo->rollBack();
            $response['error'] = 'Failed to delete activation';
        }
    } else {
        $response['error'] = 'Missing activationId';
    }
} catch (Exception $e) {
    if (isset($pdo)) {
        $pdo->rollBack();
    }
    $response['error'] = 'Error: ' . $e->getMessage();
}

echo json_encode($response);
?>
