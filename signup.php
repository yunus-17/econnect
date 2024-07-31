<?php
$registered = 0;
$userExists = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'config.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tab2 WHERE email='$email'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $userExists = 1;
        } else {
            $sql = "INSERT INTO tab2 (username, email, password) VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                $registered = 1;
            } else {
                die(mysqli_error($con));
            }
        }
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - SupplyConnect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f7f3fc;
            background-image: url('background2.jpeg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            overflow: hidden;
            position: relative;
        }
        .navbar {
            background-color: #6f42c1 !important;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-bottom: 2px solid #5a347f;
        }
        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: #fff;
        }
        .nav-link {
            color: #f7f3fc !important;
            font-size: 1.1rem;
            transition: color 0.3s;
        }
        .nav-link:hover {
            color: #d4c2f0 !important;
        }
        .navbar-toggler {
            border-color: #f7f3fc;
        }
        .signup-form {
            width: 300px;
            margin: auto;
            margin-top: 50px;
            padding: 20px;
            border-radius: 10px;
            background-color: #f9f9f9;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .signup-form h2 {
            margin-bottom: 20px;
            color: #6f42c1;
        }
        .signup-form input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .signup-form button {
            width: 100%;
            padding: 10px;
            background-color: #6f42c1;
            border: none;
            border-radius: 5px;
            color: white;
            transition: background-color 0.3s ease;
        }
        .signup-form button:hover {
            background-color: #5a347f;
        }
        footer {
            background-color: #6f42c1;
            color: #f7f3fc;
            text-align: center;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        footer p {
            margin: 0;
        }
    </style>
    <script>
        function formValidation() {
            let x = document.forms["form2"]["username"].value;
            if (x == "") {
                alert("Username must be filled out");
                return false;
            }
        }
        function newFunction() {
            document.getElementById("Form2").reset();
        }
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">SupplyConnect</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
            </ul>
        </div>
    </nav>
    <?php
    if ($userExists) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error</strong> User already exists.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }
    if ($registered) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congrats</strong> You are successfully Signed Up.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>
    <div class="signup-form">
        <h2 class="text-center mb-4">Sign Up</h2>
        <form action="signup.php" method="post" id="Form2" name="form2" onSubmit="return formValidation()">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
