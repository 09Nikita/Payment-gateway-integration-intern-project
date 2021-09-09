<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection successful";
}else{
    echo "No connection";
}

mysqli_select_db($con,'payment');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$number = $_POST['number'];
$comments = $_POST['comments'];

$query = "insert into paymentdata (fname,lname,email,number,comments)
values ('$fname','$lname','$email','$number','$comments')";

echo "$query";

mysqli_query($con,$query);

header('location:index.php');

?>