<?php
// Assuming you have a database connection established
// Connect to the database
include 'config.php';

// Handle the filter form submission
if (isset($_POST['submit'])) {
    $status = $_POST['status'];

    // Query to fetch filtered order details
    $sql = "SELECT * FROM orders";

    // Check if a filter value is selected
    if ($status != 'all') {
        $sql .= " WHERE order_status = '$status'";
    }

    $result = mysqli_query($conn, $sql);
} else {
    // Default query to fetch all order details
    $sql = "SELECT * FROM orders";
    $result = mysqli_query($conn, $sql);
}

// Handle the complete button submission
if (isset($_POST['complete'])) {
    $orderID = $_POST['order_id'];

    // Update the order status to completed in the database
    $updateSql = "UPDATE orders SET order_status = 'completed' WHERE id = '$orderID'";
    mysqli_query($conn, $updateSql);

    // Redirect to refresh the page
    header('Location: dashboard.php');
    exit();
}

// Handle the in progress button submission
if (isset($_POST['in_progress'])) {
    $orderID = $_POST['order_id'];

    // Update the order status to in progress in the database
    $updateSql = "UPDATE orders SET order_status = 'in_progress' WHERE id = '$orderID'";
    mysqli_query($conn, $updateSql);

    // Redirect to refresh the page
    header('Location: dashboard.php');
    exit();
}


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Dash Board</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #f8f9fa;
        }
        
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        
        .btn-confirm {
            background-color: #28a745;
            color: #fff;
        }

        .btn-in-progress {
            background-color: #17a2b8;
            color: #fff;
        }
        .nav-link:hover{
  background-color: rgba(255, 166, 0);
  box-shadow: 0 0 5px rgba(255, 166, 0),
               0 0 20px rgba(255, 166, 0),
               0 0 60px rgba(255, 166, 0),
               0 0 150px rgba(255, 166, 0);
               color: black;
} 
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php">Hungry Burger Dashboard</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reports.php">Reports</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <h2 class="mb-3 text-center">Order Details</h2>

        <form method="post" class="mb-3">
            <div class="form-group">
            
                <label for="status">Filter by status:</label>

                <select name="status" id="status" class="form-control">
                    <option value="all">All</option>
                    <option value="pending">Pending</option>
                    <option value="in_progress">In Progress</option>
                    <option value="completed">Completed</option>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Filter</button>
        </form>

        <table class="table">
            <thead class="thead-dark ">
                <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Products</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Order Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['products'] . "</td>";
                        echo "<td>" . $row['qty'] . "</td>";
                        echo "<td>" . $row['order_status'] . "</td>";
                        echo "<td>" . $row['order_date'] . "</td>";
                        echo "<td>";
                        
                        // Check if the order status is not "completed" to show the buttons
                        if ($row['order_status'] != 'completed') {
                            echo '<form method="post" style="display:inline-block;">';
                            echo '<input type="hidden" name="order_id" value="' . $row['id'] . '">';
                            echo '<button class="btn btn-confirm mb-2" type="submit" name="complete">Complete</button>';
                            echo '</form>';
                            
                            echo '<form method="post" style="display:inline-block;">';
                            echo '<input type="hidden" name="order_id" value="' . $row['id'] . '">';
                            echo '<button class="btn btn-in-progress" type="submit" name="in_progress">In Progress</button>';
                            echo '</form>';
                        }
                        
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr>";
                    echo "<td colspan='8'>No records found.</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <h2 class="mb-3 text-center">Contact Details</h2>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $contactSql = "SELECT * FROM contactdetails";
                $contactResult = mysqli_query($conn, $contactSql);

                if (mysqli_num_rows($contactResult) > 0) {
                    while ($contactRow = mysqli_fetch_assoc($contactResult)) {
                        echo "<tr>";
                        echo "<td>" . $contactRow['name'] . "</td>";
                        echo "<td>" . $contactRow['email'] . "</td>";
                        echo "<td>" . $contactRow['subject'] . "</td>";
                        echo "<td>" . $contactRow['message'] . "</td>";
                        echo "<td>" . $contactRow['date'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr>";
                    echo "<td colspan='5'>No contact details found.</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php
    // Close the database connection
    mysqli_close($conn);
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
