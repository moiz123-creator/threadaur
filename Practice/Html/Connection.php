<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "thread-aura";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if ($conn) 
{
   // echo "database connected";
}
else
{
    echo "database not connected";
}
?>