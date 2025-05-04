<?php
require_once 'config.php';

header('Content-Type: application/json');

try {
    $page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
    $perPage = 5;
    $offset = ($page - 1) * $perPage;

    // Get paginated entries
    $sql = "SELECT * FROM number_entries ORDER BY created_at DESC LIMIT $perPage OFFSET $offset";
    $result = $conn->query($sql);
    
    $entries = [];
    while($row = $result->fetch_assoc()) {
        $entries[] = $row;
    }

    // Get total count
    $countResult = $conn->query("SELECT COUNT(*) as total FROM number_entries");
    $total = $countResult->fetch_assoc()['total'];

    echo json_encode([
        'success' => true,
        'entries' => $entries,
        'totalPages' => ceil($total / $perPage)
    ]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}
?>