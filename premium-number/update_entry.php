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

    // Validate required fields
    if (!isset($_POST['id'], $_POST['number'], $_POST['price'])) {
        throw new Exception('Missing required fields');
    }

    $id = $conn->real_escape_string($_POST['id']);
    $number = $conn->real_escape_string($_POST['number']);
    $price = $conn->real_escape_string($_POST['price']);

    // Validate price is numeric
    if (!is_numeric($price)) {
        throw new Exception('Invalid price format');
    }

    // Calculate digit sum
    $digits = preg_replace('/\D/', '', $number);
    $sum = array_sum(str_split($digits));

    $sql = "UPDATE number_entries SET 
            number_input = '$number',
            digit_sum = '$sum',
            price = '$price'
            WHERE id = '$id'";

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