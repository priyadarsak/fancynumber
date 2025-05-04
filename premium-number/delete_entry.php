<?php
require_once 'config.php';

// Turn off error output to prevent corrupting JSON
ini_set('display_errors', 0);
error_reporting(0);

header('Content-Type: application/json');

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Invalid request method');
    }

    // Validate required field
    if (!isset($_POST['id'])) {
        throw new Exception('Missing record ID');
    }

    $id = $conn->real_escape_string($_POST['id']);

    $sql = "DELETE FROM number_entries WHERE id = '$id'";
    
    if (!$conn->query($sql)) {
        throw new Exception($conn->error);
    }

    echo json_encode(['success' => true]);
    
} catch (Exception $e) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}
?>