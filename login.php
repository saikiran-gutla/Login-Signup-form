<?php
$servername="localhost";
$user="root";
$password="";
$dbname="task";
$conn= new mysqli($servername,$user,$password,$dbname);
if($conn->connect_error)
{
die("connection failed: please check the database name" . $conn->connect_error);
}/*
$db = mysql_connect($servername,$user,$password)or die("Error connecting to database."); 
    //Connect to the databasse 
    mysql_select_db($db,$dbname) or die("Couldn't select the database."); 
    //Selects the database 
//form data*/
$luname = $_POST['luname']; 
$lpass = $_POST['lpass']; 
$tsql =  mysqli_query($conn,"SELECT * FROM reg WHERE email='$luname' AND pass='$lpass';");
$row = mysqli_fetch_array($tsql);
if($row["email"]==$luname && $row["pass"]==$lpass)
{
	echo 'Welcome '.$luname;
}
	else{
		echo 'not found,';
}
?>
<?php/* 
session_start(); 
if(!$_SESSION['logged']){ 
    header("Location: task.php"); 
    exit; 
} 
echo 'Welcome, '.$_SESSION['email']; */
?> 

