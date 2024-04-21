<?php

// Connect to the database
include 'config.php';

// Handle the filter form submission
if (isset($_POST['submit'])) {
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $status = $_POST['status'];

    // Query to fetch filtered order details
    $sql = "SELECT * FROM orders WHERE order_date BETWEEN '$start_date' AND '$end_date'";

    // Check if a filter value is selected
    if ($status != 'all') {
        $sql .= " AND order_status = '$status'";
    }

    $result = mysqli_query($conn, $sql);
} else {
    // Default query to fetch all order details
    $sql = "SELECT * FROM orders";
    $result = mysqli_query($conn, $sql);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
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
        <a class="navbar-brand" href="#">Dashboard</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Dashbord</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <h2 class="mb-3 text-center">Order Details Report</h2>

        <form method="post" class="mb-3">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="start_date">Start Date:</label>
                    <input type="date" name="start_date" id="start_date" class="form-control" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="end_date">End Date:</label>
                    <input type="date" name="end_date" id="end_date" class="form-control" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="status">Filter by status:</label>
                    <select name="status" id="status" class="form-control">
                        <option value="all">All</option>
                        <option value="pending">Pending</option>
                        <option value="completed">Completed</option>
                        <option value="in_progress">In Progress</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <button type="submit" name="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Products</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Order Date</th>
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
                        echo "</tr>";
                    }
                } else {
                    echo "<tr>";
                    echo "<td colspan='7'>No records found.</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <div class="text-center">
            <button class="btn btn-primary" onclick="printReport()">Print</button>
            <button class="btn btn-primary"onclick="saveReport()">Save as PDF</button>
        </div>
    </div>

    <?php
    // Close the database connection
    mysqli_close($conn);
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function printReport() {
            window.print();
        }

        function saveReport() {
        
            $.ajax({
                url: 'generate_report.php',
                type: 'POST',
                data: {
                    start_date: $('#start_date').val(),
                    end_date: $('#end_date').val(),
                    status: $('#status').val()
                },
                success: function(response) {
                    // Create a download link for the generated PDF
                    var link = document.createElement('a');
                    link.href = response;
                    link.download = 'order_report.pdf';
                    link.target = '_blank';
                    link.click();
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        }
    </script>
  </body>
</html>
