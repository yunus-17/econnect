<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - SupplyConnect</title>
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
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #6f42c1;
            border: none;
            width: 100%;
            padding: 10px;
            font-size: 1.2rem;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #5a32a3;
        }
        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255,255,255,0.5);
        }
        .navbar-dark .navbar-nav .nav-link:hover,
        .navbar-dark .navbar-nav .nav-link.active {
            color: #fff;
        }
        .navbar-dark .navbar-brand {
            font-weight: bold;
        }
        .invalid-feedback {
            color: #dc3545;
        }
        .alert {
            margin-top: 20px;
        }
        .bg-dark {
            background-color: #6f42c1 !important;
        }
    </style>
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
                    <li class="nav-item"><a class="nav-link active" href="payment.php">Payment</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container">
        <h1>Payment Information</h1>
        <form method="post" action="payment.php" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="name">Name on Card:</label>
                <input type="text" class="form-control" id="name" name="name" required>
                <div class="invalid-feedback">Please enter the name on the card.</div>
            </div>
            <div class="form-group">
                <label for="cardNumber">Card Number:</label>
                <input type="text" class="form-control" id="cardNumber" name="cardNumber" pattern="\d{16}" required>
                <div class="invalid-feedback">Please enter a valid 16-digit card number.</div>
            </div>
            <div class="form-group">
                <label for="expiryDate">Expiry Date:</label>
                <input type="text" class="form-control" id="expiryDate" name="expiryDate" placeholder="MM/YY" pattern="\d{2}/\d{2}" required>
                <div class="invalid-feedback">Please enter the expiry date in MM/YY format.</div>
            </div>
            <div class="form-group">
                <label for="cvv">CVV:</label>
                <input type="text" class="form-control" id="cvv" name="cvv" pattern="\d{3}" required>
                <div class="invalid-feedback">Please enter a valid 3-digit CVV.</div>
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" class="form-control" id="amount" name="amount" required>
                <div class="invalid-feedback">Please enter the amount to be paid.</div>
            </div>
            <div class="form-group">
                <label for="paymentMethod">Payment Method:</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="card" value="card" checked>
                        <label class="form-check-label" for="card">Card</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="upi" value="upi">
                        <label class="form-check-label" for="upi">UPI</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Pay Now</button>
        </form>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');

                        // Redirect to UPI page if UPI is selected
                        if (form.checkValidity() && document.getElementById('upi').checked) {
                            event.preventDefault();
                            window.location.href = "upi.php";
                        }
                    }, false);
                });
            }, false);
        })();
    </script>
</body>
</html>