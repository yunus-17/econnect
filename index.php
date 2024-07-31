<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SupplyConnect</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        
        .stat-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 50px 0;
            background-color: #f8f9fa;
        }
        .stat-box {
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            flex: 1;
            margin: 10px;
            border-radius: 10px;
        }
        .stat-box:first-child {
            background-color: #2c3e50;
            color: white;
        }
        .stat-box h2 {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        .stat-box p {
            font-size: 1rem;
            color: #7f8c8d;
        }
        .stat-box:first-child p {
            color: #ecf0f1;
        }
        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: #34495e;
        }
        .stat-box:first-child .stat-number {
            color: #ffffff;
        }
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
        .jumbotron {
            background-color: #e9d8fd;
            border-radius: 15px;
            padding: 2rem 1rem;
        }
        .display-4 {
            color: #6f42c1;
        }
        .lead {
            color: #5a347f;
        }
        .btn-primary {
            background-color: #6f42c1;
            border: none;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #5a347f;
        }
        footer {
            background-color: #6f42c1;
            color: #f7f3fc;
            position: fixed;
            width: 100%;
            bottom: 0;
            text-align: center;
            padding: 1rem 0;
        }
        footer p {
            margin: 0;
        }
        .bubble {
            position: absolute;
            bottom: -100px;
            width: 50px;
            height: 50px;
            background-color: rgba(111, 66, 193, 0.6);
            border-radius: 50%;
            animation: rise 10s infinite ease-in-out;
        }
        .bubble:nth-child(2) {
            width: 70px;
            height: 70px;
            left: 20%;
            animation-duration: 7s;
            animation-delay: 2s;
        }
        .bubble:nth-child(3) {
            width: 30px;
            height: 30px;
            left: 40%;
            animation-duration: 12s;
            animation-delay: 4s;
        }
        .bubble:nth-child(4) {
            width: 100px;
            height: 100px;
            left: 60%;
            animation-duration: 15s;
            animation-delay: 6s;
        }
        .bubble:nth-child(5) {
            width: 80px;
            height: 80px;
            left: 80%;
            animation-duration: 8s;
            animation-delay: 1s;
        }

        @keyframes rise {
            0% {
                bottom: -100px;
                transform: translateX(0);
            }
            50% {
                transform: translateX(50px);
            }
            100% {
                bottom: 100%;
                transform: translateX(0);
            }
        }
        .partners {
            margin: 50px auto;
            text-align: center;
        }
        .partners h2 {
            color: #6f42c1;
            margin-bottom: 20px;
        }
        .partners img {
            width: 100px;
            height: auto;
            margin: 10px;
            transition: transform 0.3s;
        }
        .partners img:hover {
            transform: scale(1.1);
        }
        
        .container {
            height: 1000px;
            overflow-y: auto; /* Enable vertical scrolling */
        }
        body {
            background-color: #f7f3fc;
            overflow-y: auto; /* Ensure scrolling is enabled for the body */
        }
    </style>
</head>
<body>
    <header>
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
    </header>
    <main class="container">
        <div class="jumbotron text-center animate__animated animate__fadeIn">
            <h1 class="display-4">Welcome to SupplyConnect</h1>
            <p class="lead">Connecting consumers with suppliers seamlessly.</p>
            <hr class="my-4">
            <p>Join us today and start your free trial!</p>
            <a class="btn btn-primary btn-lg" href="start-free-trial.php" role="button">Start Free Trial</a>
        </div>
        <div class="stat-container">
            <div class="stat-box">
                <h2 class="stat-number">1000+</h2>
                <h2>Products</h2>
                <p>Quality products from trusted sellers</p>
            </div>
            <div class="stat-box">
                <h2 class="stat-number">50K+</h2>
                <h2>Customers</h2>
                <p>1000+ active sellers</p>
            </div>
            <div class="stat-box">
                <h2 class="stat-number">50,000+</h2>
                <h2>Total Sales</h2>
                <p>Verified official sellers</p>
            </div>
        </div><div class="partners-container">
        <div class="partners">
            <h2>Our Official Partners</h2>
            <img action ="https://www.rolls-roycemotorcars.com/" src="rollsroyce.png" alt="Partner 1">
            <img src="royal.png" alt="Partner 2">
            <img src="Zepto.png" alt="Partner 3">
            <img src="zudio.png" alt="Partner 4">
            <img src="porsche.png" alt="Partner 5">
            <img src="myntra.jpg" alt="Partner 6">
            <img src="oneplus.png" alt="Partner 7">
        </div></div>
    </main>
    <!-- Bubble elements -->
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
