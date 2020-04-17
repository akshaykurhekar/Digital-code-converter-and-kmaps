<!-- <?php
	$user='root';
	$pass='root145';
    $dbname='augmented_food';
	

$conn = new PDO('mysql:host=localhost;dbname=augmented_food', $user, $pass);
	if (!$conn) {
		die("Connection failed: " . $conn->connect_error);
	}
  	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
?>
 -->

<?php
session_start();
//header('location:kmaplogin.php');

$host = 'localhost';
$user= 'root';
$pass= 'root145';

$con = mysqli_connect($host,$user,$pass);

mysqli_select_db($con,'kmap');

$name = $_POST['user'];
$pass = $_POST['pass'];


$s = "select * from kmapregister where user = '$name' && pass = '$pass' ";

$num = mysqli_num_rows(mysqli_query($con, $s));

if($num){

	 echo '<script type = "text/Javascript"> alert(" Login successfully.."); 

location.href="home.php";
	 </script>';

	//header('location:home.php');

}else
{
	echo '<script type = "text/Javascript"> alert(" Login Failed..Try Again..."); 
	location.href="kmaplogin.php";</script>';
	//header('location:Kmaplogin.php');
}

?>