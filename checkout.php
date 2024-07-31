<?php
session_start();
include 'config.php';

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "<p class='text-center'>Your cart is empty.</p>";
    exit;
}

// Handle checkout process (simplified example)
echo "<h1>Checkout</h1>";
echo "<p>Thank you for your purchase!</p>";

// Clear the cart after checkout
unset($_SESSION['cart']);
?>
