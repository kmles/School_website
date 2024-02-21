<?php

$email=$_POST['email'];
$password=$_POST['password'];
// $mobile=$_POST['mobile'];
// $comments=$_POST['comments'];

 echo("your E-mail id is ".$email "& your password is ******");
$connection=mysqli_connect("127.0.0.1","root","","schooldata");
// login name is table name
$insert="INSERT INTO login SET email='$email',password='$password'";
$connection->query($insert);
echo "<script type='text/javascript'>alert ('Thanks for Login');
window.history.log(-1);
</script>";
?>