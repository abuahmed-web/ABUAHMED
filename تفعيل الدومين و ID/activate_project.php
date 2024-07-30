<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $projectId = $_POST['projectId'];
    $domainOrId = $_POST['domainOrId'];

    $sql = "INSERT INTO activations (project_id, domain_or_id, activation_status) VALUES ($projectId, '$domainOrId', 'مفعل')";
    if (mysqli_query($conn, $sql)) {
        $activationId = mysqli_insert_id($conn);
        $activationTime = date('Y-m-d H:i:s');
        echo json_encode(['success' => true, 'activationId' => $activationId, 'activationTime' => $activationTime]);
    } else {
        echo json_encode(['success' => false, 'error' => mysqli_error($conn)]);
    }
}
?>
