<?php
$con = mysqli_connect('localhost','root','','digital library');
$email = $_POST['email'];
$password = $_POST['password'];

$check = mysqli_query($con, "UPDATE userdetails SET password='$password' WHERE email='$email'");


if($check > 0){
echo "Data Updated";
}else{
echo "Error";
}
?>