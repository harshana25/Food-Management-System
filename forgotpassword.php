<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles for the navigation pane */
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #ffffff;
            box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #007bff;
        }

        .navbar-nav .nav-link {
            color: #333333;
        }

        .navbar-nav .nav-link:hover {
            color: #007bff;
        }
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-top: 100px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-search {
            border-radius: 5px;
        }
        #logo-color i img{
  width:50px;
}
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  
            <!-- Brand Logo -->
            <a class="navbar-brand" href="index.php" id="logo-color"><i><img src="img/burgericon.png" alt=""></i>Hungry Burger</a>
            <!-- Navigation Links -->
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="btn btn-primary" href="login.php" role="button">Login</a>
        </li>
            </ul>
    
    </nav>


    <div class="container">
        <h2 class="text-center mb-4">Forgot Password</h2>
        <form action="checkemail.php" method="post">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address"
                    required>


                    <?php if(isset($_GET['emailNotFound'])): ?>
                <div class="alert alert-danger mt-2" role="alert">
                    The provided email does not exist.
                </div>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary btn-block btn-search" name="search">Search</button>

            <?php if(isset($_GET['showPasswordField'])): ?>
            <div class="form-group" id="newPasswordSection">
                <label for="newPassword">Enter New Password</label>
                <input type="password" class="form-control" id="newPassword" name="newPassword"
                    placeholder="Enter new password" required>

                    
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="updatePassword">Update Password</button>
            <?php endif; ?>

            <?php if(isset($_GET['passwordUpdated'])): ?>
            <div class="alert alert-success mt-3" role="alert">
                New password updated!
            </div>
            <?php endif; ?>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        <script>
        $(document).ready(function () {
            $(".btn-search").click(function () {
                $("#newPasswordSection").removeClass("hidden");
            });
        });
    </script>

</body>

</html>
