<?php
$con = mysqli_connect('localhost','root','','digital library');
$id = $_POST['id'];

$check = mysqli_query($con, "DELETE FROM bookdetails WHERE id='$id'");


if($check > 0){
echo "Book was Returned";
}else{
echo "Error";
}
?>