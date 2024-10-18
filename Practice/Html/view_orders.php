<?php
// Include your database connection file
include "Connection.php";

// SQL query to fetch all orders
$sql = "SELECT * FROM orders ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Orders</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Payment Method</th>
                <th>Date</th>
            </tr>";
    
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['product_name']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['address']}</td>
                <td>{$row['payment_method']}</td>
                <td>{$row['created_at']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No orders found.";
}

// Close the database connection
mysqli_close($conn);
?>
