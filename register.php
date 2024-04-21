<?php
// Connect to MySQL database
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // Check if any field is empty
  if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
    header("Location: signup.php?message=Please enter all required fields");
    exit();
  }

  // Check if password and confirm password match
  if ($password !== $confirm_password) {
    header("Location: signup.php?message=Password and Confirm Password do not match");
    exit();
  }

  // Encrypt the password
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Check if username or email already exists
  $stmt = $conn->prepare('SELECT * FROM users WHERE name = ? OR email = ?');
  $stmt->bind_param('ss', $name, $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $stmt->close();
    $conn->close();
    // Username or email already exists
    header("Location: signup.php?message=Username or Email already exists");
    exit();
  } else {
    $status = 'active';
    $stmt = $conn->prepare('INSERT INTO users (name, email, password, status) VALUES (?, ?, ?, ?)');
    $stmt->bind_param('ssss', $name, $email, $hashed_password, $status);

    if ($stmt->execute()) {
      $stmt->close();
      $conn->close();
      // User registered successfully
      header("Location: signup.php?success=User registered successfully");
      exit();
    } else {
      echo 'Error: ' . $stmt->error;
    }
  }

  $stmt->close();
  $conn->close();
}
?>
