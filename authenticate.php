<?php
session_start();
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Retrieve user details from the database
  $stmt = $conn->prepare('SELECT * FROM users WHERE email = ?');
  $stmt->bind_param('s', $email);
  $stmt->execute();
  $result = $stmt->get_result();
  $user = $result->fetch_assoc();

  if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['email'] = $user['email'];
    // ... any other session variables you want to set ...

    // Return success response
    echo json_encode(['success' => true]);
  } else {
    // Return failure response
    echo json_encode(['success' => false, 'error' => 'Invalid username or password']);
  }
}
?>

