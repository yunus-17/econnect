<?php
include 'config.php';
?>
<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - SupplyConnect</title>
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
        h1 {
            color: #6f42c1;
        }
        .card {
            border: none;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        .card-img-top {
            border-radius: 10px 10px 0 0;
        }
        .btn-primary {
            background-color: #6f42c1;
            border: none;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #5a347f;
        }
        .btn-success {
            background-color: #5cb85c;
            border: none;
            transition: background-color 0.3s;
        }
        .btn-success:hover {
            background-color: #4cae4c;
        }
        footer {
            background-color: #6f42c1;
            color: #f7f3fc;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        footer p {
            margin: 0;
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
                    <a href="logout.php" class="btn btn-danger">Logout</a>                </ul>
            </div>
        </nav>
    </header>
    <div class="container mt-5">

        <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
        <p> You are logged in!</p>
        <a href="supplier.php" class="btn btn-danger">sell your products here!</a>                </ul>

    </div>
    <main class="container mt-5">
        <h1>Products</h1>
        <div class="row" id="products-list">
            <?php
            $sql = "SELECT * FROM basha";
            $result = $con->query($sql);

            if ($result) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "
                        <div class='col-md-4'>
                            <div class='card mb-4 shadow-sm'>
                                <img src='{$row['image']}' class='card-img-top' alt='{$row['name']}'>
                                <div class='card-body'>
                                    <h5 class='card-title'>{$row['name']}</h5>
                                    <p class='card-text'>{$row['description']}</p>
                                    <p class='card-text'><strong>Price:</strong> \${$row['price']}</p>
                                    <p class='card-text'><strong>Contact:</strong> {$row['email']}, {$row['phone']}</p>
                                    <form method='post' action='payment.php'>
                                        <input type='hidden' name='product_id' value='{$row['name']}'>
                                        <button type='submit' class='btn btn-success' name='buy_now'>Buy Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>";
                    }
                } else {
                    echo "<p class='text-center'>No products available.</p>";
                }
            } else {
                echo "<p class='text-center'>Error: " . $con->error . "</p>";
            }
            ?>
        </div>
    </main>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
