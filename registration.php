<?php
session_start();
//header('location:kmapregistration.php');

$host = 'localhost';
$user= "root145";
$pass= '';

$con = mysqli_connect($host,$user,$pass);

mysqli_select_db($con,'kmap');

$name = $_POST['user'];
$pass = $_POST['pass'];

$s = "select * from kmapregister where user = '$name' ";

//$result = mysqli_query($con, $s);

$num = mysqli_num_rows(mysqli_query($con, $s));

if($num == 1){

	 echo '<script type = "text/Javascript"> alert("User Existing.... ");
	 location.href="kmapregistration.php"; </script>';


}else
{
	$reg = "insert into kmapregister(user , pass) values ('$name','$pass')";
	mysqli_query($con,$reg);

	 echo '<script type = "text/Javascript"> alert(" Registered Successfully ");
	 location.href="kmaplogin.php" </script>';

}

?>