<?php

include "Connection.php";

 $email = $_GET['email'];
 $password = $_GET['password'];


 //echo $email = $_GET['email'];
 //echo $password = $_GET['password'];


 $sql = "INSERT INTO `login_customers`(`Email`, `Password`) VALUES ('$email','$password')";

$result = mysqli_query($conn,$sql);
if($result){
 echo "Data Connected";
 header('location: ../Html/HOME.Html');
}
else{
echo "Data not connected";
}
?>