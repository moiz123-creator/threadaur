<?php

include "connection.php";

$id = $_GET['id'];
$sql = "delete from `signup` where id = '$id'";

$result = mysqli_query($conn,$sql);
if($result){
echo "Data Deleted";
}
else{
echo "Data not Deleted";
}
?>