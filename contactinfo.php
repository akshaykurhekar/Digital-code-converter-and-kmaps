<?php
session_start();

//header('location:contact.php');

$host = 'localhost';
$user= 'root';
$pass= '';

$con = mysqli_connect($host,$user,$pass);

mysqli_select_db($con,'kmap');

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$college=$_POST['college'];
	$number=$_POST['number'];
	$message=$_POST['message'];

$query = "Insert into contact( name , email, college, number , message) values('$name','$email' ,'$college', '$number' ,'$message')" ;

$query_run = mysqli_query($con,$query);

	if ($query_run) {
       
       echo '<script type = "text/Javascript"> alert("Message Send Successfulley ");
       		location.href="contact.php";
        </script>';
       
		
	}
	else
	{
		echo '<script type = "text/Javascript"> alert("Data NOT saved...Tyr again... ");
				location.href="contact.php";
		 </script>';

	}

}

?>