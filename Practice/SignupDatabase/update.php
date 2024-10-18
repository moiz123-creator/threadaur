<?php

include "Connection.php";

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];


$sql = "UPDATE signup SET Username = '$username',Email='$email',Password='$password' where id = '$id';";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "data updated";
    
} else {
    echo "data not updated";
}