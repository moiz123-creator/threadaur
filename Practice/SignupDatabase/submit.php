<?php
include "Connection.php";

$username = $_GET['username'];
$email = $_GET['email'];
$password = $_GET['password'];
$confirm_password = $_GET['confirm_password'];

// Password hashing
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Check if passwords match
if ($password !== $confirm_password) {
    echo "Passwords do not match.";
    exit();
}

$sql = "INSERT INTO `signup_customers` (`Username`, `Email`, `Password`) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $username, $email, $hashed_password);

if ($stmt->execute()) {
    echo "Data Connected";
    header('Location: ../Html/HOME.html');
} else {
    echo "Data not connected: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
