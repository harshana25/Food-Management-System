<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the order ID and action are provided
    if (isset($_POST['id']) && isset($_POST['action'])) {
        $orderId = $_POST['id'];
        $action = $_POST['action'];

        // Update the order status in the database
        $query = "UPDATE orders SET order_status = '$action' WHERE id = $orderId";
        if ($conn->query($query) === TRUE) {
            $response = array('success' => true);
        } else {
            $response = array('success' => false, 'message' => 'Error updating order status.');
        }
    } else {
        $response = array('success' => false, 'message' => 'Missing order ID or action.');
    }
} else {
    $response = array('success' => false, 'message' => 'Invalid request method.');
}

// Close the database connection
$conn->close();

// Return the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
