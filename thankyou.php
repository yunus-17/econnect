<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - SupplyConnect</title>
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
        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: #fff !important;
        }
        .container {
            margin-top: 50px;
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            margin-bottom: 30px;
        }
        .bg-dark {
            background-color: #6f42c1 !important;
        }
        .btn-primary {
            background-color: #6f42c1;
            border: none;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #5a347f;
        }
    </style>
    <script>
        function redirectToProducts() {
            window.location.href = "product.php";
        }
    </script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                    <li class="nav-item"><a class="nav-link" href="payment.php">Payment</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <h1>Thank You!</h1>
        <p>Thank you for shopping with us. Your payment has been received successfully.</p>
        <button type="button" class="btn btn-primary" onclick="redirectToProducts()">Back to Products</button>
    </div>
</body>
</html>
