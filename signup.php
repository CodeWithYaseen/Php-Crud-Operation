<?php

$con = mysqli_connect("localhost", "root" , "", "crud_db");
if(!$con){
    echo "Database not connected";
}
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$hashPass = password_hash($password,PASSWORD_BCRYPT);
$phone = $_REQUEST['phone'];
$gender = $_REQUEST['gender'];
$query = "INSERT INTO `registration`(`name`, `email`, `password`, `phone`, `gender`) VALUES ('$name','$email','$hashPass','$phone','$gender')";
mysqli_query($con,$query);
header("Location: read.php");   
// echo $query;
?>
