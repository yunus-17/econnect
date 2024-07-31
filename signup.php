<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - SupplyConnect</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
            overflow: hidden;
            margin: 0;
        }
        .signup-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            color: #333;
            position: relative;
            z-index: 10;
        }
        .signup-container h1 {
            margin-bottom: 30px;
            font-weight: 700;
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .signup-btn {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #6c757d;
            border: none;
            font-weight: 700;
            transition: background-color 0.3s ease;
        }
        .signup-btn:hover {
            background-color: #5a6268;
        }
        .navbar-brand {
            font-weight: 700;
        }
        .nav-link {
            font-weight: 700;
        }
        .bubbles {
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 100%;
            height: 100%;
            transform: translateX(-50%);
            overflow: hidden;
            z-index: 1;
        }
        .bubble {
            position: absolute;
            bottom: -50px;
            width: 40px;
            height: 40px;
            background-color: rgba(108, 117, 125, 0.2);
            border-radius: 50%;
            animation: rise 10s infinite ease-in;
        }
        .bubble:nth-child(2) {
            width: 60px;
            height: 60px;
            left: 25%;
            animation-duration: 12s;
            animation-delay: 2s;
        }
        .bubble:nth-child(3) {
            width: 80px;
            height: 80px;
            left: 50%;
            animation-duration: 15s;
            animation-delay: 4s;
        }
        .bubble:nth-child(4) {
            width: 100px;
            height: 100px;
            left: 75%;
            animation-duration: 18s;
            animation-delay: 6s;
        }
        .bubble:nth-child(5) {
            width: 120px;
            height: 120px;
            left: 90%;
            animation-duration: 20s;
            animation-delay: 8s;
        }
        @keyframes rise {
            0% {
                bottom: -50px;
                transform: translateX(0) scale(0.5);
            }
            50% {
                transform: translateX(30px) scale(1);
            }
            100% {
                bottom: 100%;
                transform: translateX(-30px) scale(0.5);
            }
        }
        header {
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 20;
        }
        main {
            margin-top: 80px; /* To ensure content is not hidden behind the fixed header */
        }
        .parcel {
            position: absolute;
            right: 20px;
            bottom: 20px;
            width: 100px;
            height: 100px;
            background: url('https://image.shutterstock.com/image-vector/box-icon-vector-260nw-561520297.jpg') no-repeat center center / contain;
            animation: bounce 2s infinite;
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-30px);
            }
            60% {
                transform: translateY(-15px);
            }
        }
        .parcel:hover {
            animation: none;
            background: url('https://image.shutterstock.com/image-vector/open-box-icon-vector-260nw-561520293.jpg') no-repeat center center / contain;
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
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="product.html">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="cart.html">Cart</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="signup.html">Sign Up</a></li>
                    <li class="nav-item"><a class="nav-link" href="supplier.html">Supplier</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container mt-5">
        <div class="signup-container">
            <h1>Sign Up</h1>
            <form id="signup-form" class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                    <div class="invalid-feedback">Please enter your username.</div>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <div class="invalid-feedback">Please enter your password.</div>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password:</label>
                    <input type="password" class="form-control" id="confirm-password" name="confirm-password" required>
                    <div class="invalid-feedback">Please confirm your password.</div>
                </div>
                <button type="submit" class="btn signup-btn">Sign Up</button>
            </form>
        </div>
    </main>

    <div class="parcel"></div>

    <div class="bubbles">
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
    </div>

</body>
</html>
