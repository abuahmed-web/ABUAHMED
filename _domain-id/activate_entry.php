<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "u681230832_ID_DOMAIN";
$password = "c4U+s@gOWN9";
$dbname = "u681230832_ID_DOMAIN";

$response = array('success' => false);

try {
    if (isset($_POST['projectId']) && isset($_POST['domainOrId']) && isset($_POST['type'])) {
        $projectId = intval($_POST['projectId']);
        $domainOrId = $_POST['domainOrId'];
        $type = $_POST['type'];

        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // إدخال التفعيل بناءً على نوع الإدخال (domain or ID)
        $stmt = $pdo->prepare("INSERT INTO activations (project_id, domain_or_id, type) VALUES (:projectId, :domainOrId, :type)");
        $stmt->execute(['projectId' => $projectId, 'domainOrId' => $domainOrId, 'type' => $type]);

        $response['success'] = true;
    } else {
        $response['error'] = 'Missing parameters';
    }
} catch (Exception $e) {
    $response['error'] = 'Error: ' . $e->getMessage();
}

echo json_encode($response);
?>
