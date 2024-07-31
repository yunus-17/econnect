<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier - SupplyConnect</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
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
        /* Custom purple theme */
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
        .navbar-dark.bg-dark {
            background-color: #6a0dad; /* Purple background color */
        }
        :root {
            --primary-color: #6a0dad; /* Purple color */
            --primary-hover-color: #4c0887; /* Darker shade for hover */
            --text-color: #333; /* Dark text color */
            --bg-color: #f8f9fa; /* Light background color */
        }

        /* Navbar */
        .navbar-dark .navbar-nav .nav-link {
            color: var(--text-color);
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: var(--primary-hover-color);
        }

        .navbar-dark .navbar-brand {
            color: var(--text-color);
        }

        .navbar-dark .navbar-toggler-icon {
            background-color: var(--text-color);
        }

        /* Form */
        .form-control {
            border-color: var(--primary-color);
        }

        .form-control:focus {
            border-color: var(--primary-hover-color);
            box-shadow: 0 0 0 0.2rem rgba(106, 13, 173, 0.25);
        }

        /* Buttons */
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--primary-hover-color);
            border-color: var(--primary-hover-color);
        }

        /* Alerts */
        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }

        /* Footer */
        footer {
            background-color: var(--primary-color);
            color: var(--bg-color);
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
                    <li class="nav-item"><a class="nav-link" href="product.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container mt-5">
        <h1>Submit Product Details</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $image = 'uploads/' . basename($_FILES['image']['name']);
            $phone = $_POST['phone'];
            $email = $_POST['email'];

            // Ensure the uploads directory exists
            if (!is_dir('uploads')) {
                mkdir('uploads', 0777, true);
            }

            if (move_uploaded_file($_FILES['image']['tmp_name'], $image)) {
                $sql = "INSERT INTO basha (name, price, description, image, phone, email)
                        VALUES ('$name', '$price', '$description', '$image', '$phone', '$email')";

                if ($con->query($sql) === TRUE) {
                    echo "<div class='alert alert-success'>New product added successfully.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Error: " . $con->error . "</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>Error uploading file.</div>";
            }
        }
        ?>
        <form id="supplier-form" class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
                <div class="invalid-feedback">Please enter the product name.</div>
            </div>
            <div class="form-group">
                <label for="price">Product Price:</label>
                <input type="number" class="form-control" id="price" name="price" required>
                <div class="invalid-feedback">Please enter the product price.</div>
            </div>
            <div class="form-group">
                <label for="description">Product Description:</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
                <div class="invalid-feedback">Please enter the product description.</div>
            </div>
            <div class="form-group">
                <label for="product-image">Product Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
                <div class="invalid-feedback">Please upload a product image.</div>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" class="form-control" id="phone" name="phone"  placeholder="Format: 1111122222" required>
                <div class="invalid-feedback">Please enter a valid phone number (Format: 123-456-7890).</div>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="invalid-feedback">Please enter a valid email address.</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
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
                    }, false);
                });
            }, false);
        })();
    </script>
</body>
</html>
