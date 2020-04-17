<!DOCTYPE html>
<html>
<head>
	<title>Kmap_login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body class="bg-info">

<br>
<br>
<br>
<br>
	<div class="container jumbotron bg-warning">
		<div class="login-box">
		<div class="row">
		<div class="col-md-6 ">
			<h2> Login Here</h2>
			<br>
			<form action="validation.php" method="post" autocomplete="off">	
					<div class="form-group">
						<label><h4>Username</h4></label>
						<input type="text" name="user" class="form-control" placeholder="UserName" required >						
					</div>
					<div class="form-group">
						<label><h4>Password</h4></label>
						<input type="Password" name="pass" class="form-control" placeholder="Password" required>						
					</div>
					<br>
					<button type="submit" class="btn btn-info"> Login </button>
			</form>
		
		</div>
		</div>
		<p>
				<br>
				If Registration is Not Down then Piz SignUP first :   
			<input type="button" onclick="window.location.href='kmapregistration.php';" class="btn btn-dark" value="signUp" />  
			</p>
		</div>
			
			
		</div>
</body>
</html>