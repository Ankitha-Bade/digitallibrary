<?php
$con = mysqli_connect('localhost','root','','digital library');
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$check_data = mysqli_query($con, "SELECT * FROM userdetails WHERE email='$email'");
$check = mysqli_num_rows($check_data);

if($check > 0){
echo "Email already exist";
}else{
$input = mysqli_query($con, "INSERT INTO userdetails (id,username,email,password) VALUES ('$id','$username','$email','$password')");
if($input){
echo "SignUp Successful";
}
}
?>