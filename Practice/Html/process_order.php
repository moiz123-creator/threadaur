<?php
// Include your database connection file
include "Connection.php"; // Ensure this file establishes a connection to your database

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare the statement
    $stmt = $conn->prepare("INSERT INTO orders (product_name, name, email, phone, address, payment_method) VALUES (?, ?, ?, ?, ?, ?)");
    
    // Bind the parameters
    $stmt->bind_param("ssssss", $product_name, $name, $email, $phone, $address, $payment_method);

    // Get customer data from the form and sanitize it
    $product_name = $_POST['product_name'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $payment_method = $_POST['payment-method'];

    // Execute the statement
    if ($stmt->execute()) {
        echo "Order placed successfully! <br>";
        echo "<a href='view_orders.php'>View Orders</a>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
