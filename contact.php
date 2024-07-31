<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Connect Consumers and Suppliers</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="contact.css">
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
        header {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Shadow for header */
            background-color: #6f42c1; /* Purple background */
        }
        .contact-info {
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1); /* Shadow for contact info */
        }
        footer {
            box-shadow: 0px -4px 10px rgba(0, 0, 0, 0.1); /* Shadow for footer */
        }
        .header-title, .header-nav a {
            color: #ffffff; /* White text for header */
        }
    </style>
</head>
<body>
    <header class="py-3">
        <div class="container text-center">
            <h1 class="header-title">Contact Us</h1>
            <nav>
                <ul class="list-inline">
                    <li class="list-inline-item"><a class="header-nav text-white" href="index.php">Home</a></li>
                    <li class="list-inline-item"><a class="header-nav text-white" href="about.php">About</a></li>
                    <li class="list-inline-item"><a class="header-nav text-white" href="contact.php">Contact</a></li>
                    <li class="list-inline-item"><a class="header-nav text-white" href="login.php">Login</a></li>
                    <li class="list-inline-item"><a class="header-nav text-white" href="signup.php">Sign Up</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container my-5">
        <h2 class="text-center">Contact Us</h2>
        <div class="contact-info bg-light p-4 rounded shadow">
            <h3><b>CSH Market India Pvt Ltd</b></h3>
            <p>1st floor, 1050, KEC,<br>
               Science and Humanities,<br>
               Dheeran Hostel,<br>
               Near Kumar Mess, Thopupalayam,<br>
               Perundurai, Erode,<br>
               Tamil Nadu - 635001,<br>
               India.</p>
            <p><b>DIRECT: </b>+91 7010499316</p>
            <p><b>MESSAGE: </b>+91 7300504121</p>
        </div>
    </main>
   
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>