<?php


// Function to check if the email exists in the users table using MySQLi
function isEmailExists($email) {
    // Replace with your actual database credentials
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "burgerdb";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);

    // Execute the query
    $stmt->execute();

    // Get the result
    $stmt->store_result();
    $num_rows = $stmt->num_rows;

    // Close the statement and the connection
    $stmt->close();
    $conn->close();

    // Return true if the email exists in the users table, false otherwise
    return $num_rows > 0;
}

if (isset($_POST['search'])) {
    // Retrieve the email from the form
    $email = $_POST['email'];

    // Check if the email exists in the users table
    if (isEmailExists($email)) {
        // If the email exists, redirect back to the forgotpassword.php page with a query parameter to show the "Enter New Password" field
        header("Location: forgotpassword.php?showPasswordField=true");
        exit;
    } else {
        // If the email does not exist, redirect back to the forgotpassword.php page with a query parameter to show an error message
        header("Location: forgotpassword.php?emailNotFound=true");
        exit;
    }
}

if (isset($_POST['updatePassword'])) {
    // Retrieve the email and new password from the form
    $email = $_POST['email'];
    $newPassword = $_POST['newPassword'];

    // Hash the new password 
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "burgerdb";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
    $stmt->bind_param("ss", $hashedPassword, $email);

    // Execute the update query
    if ($stmt->execute()) {
        // If the password update is successful, redirect back to the forgotpassword.php page with a query parameter to show the success message
        header("Location: forgotpassword.php?passwordUpdated=true");
        exit;
    } else {
        // If the password update fails, redirect back to the forgotpassword.php page with a query parameter to show an error message
        header("Location: forgotpassword.php?updateFailed=true");
        exit;
    }

    // Close the statement and the connection
    $stmt->close();
    $conn->close();
}
?>
