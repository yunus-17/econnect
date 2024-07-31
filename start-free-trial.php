<?php
session_start();
$error = '';
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $success = "Thank you for starting your free trial! We've sent a confirmation to $email.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Free Trial - SupplyConnect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            color: #fff !important;
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
        .main-content {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            background-color: #f9f9f9;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .main-content h1 {
            color: #6f42c1;
            margin-bottom: 20px;
        }
        .main-content .btn-primary {
            background-color: #6f42c1;
            border: none;
            transition: background-color 0.3s ease;
        }
        .main-content .btn-primary:hover {
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
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">SupplyConnect</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="product.php">Products</a></li>
                    
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <?php if(isset($_SESSION['username'])): ?>
                        <li class="nav-item"><a class="nav-link" href="#"><?php echo $_SESSION['username']; ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
                    <?php endif; ?>
                    <li class="nav-item"><a class="nav-link" href="supplier.php">Supplier</a></li>
                    <li class="nav-item"><a class="nav-link" href="start-free-trial.php">Start Free Trial</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="main-content container mt-5">
        <h1>Start Free Trial</h1>
        <h6>Experience the full power of SupplyConnect with our free trial. Sign up today and start connecting with suppliers and customers effortlessly.</h6>
        <?php if ($error) echo "<div class='alert alert-danger'>$error</div>"; ?>
        <?php if ($success) echo "<div class='alert alert-success'>$success</div>"; ?>
        <a href="signup.php" class="btn btn-primary">Sign Up for Free Trial</a>
    </main>
    <footer>
        <p>&copy; 2024 SupplyConnect</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>