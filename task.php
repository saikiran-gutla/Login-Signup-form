<?php
	error_reporting(0);
$servername="localhost";
$user="root";
$password="";
$dbname="task";
//form text
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
//conncetion establishment

$conn= new mysqli($servername,$user,$password,$dbname);
if($conn->connect_error)
{
die("connection failed: please check the database name" . $conn->connect_error);
}
	
if($pass == $cpass)
{
$psql = "INSERT INTO reg(fname,lname,gen,mobile,email,pass,cpass) VALUES ('$fname', '$lname', '$gender', '$mobile', '$email','$pass','$cpass')";	
}
	
if(mysqli_query($conn, $psql))
{
	echo " ";
}
else if(($pass && $cpass)!=0) //change here
{
echo "Passwords Mismatch, Please Register again" . $psql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>