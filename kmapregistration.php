<!DOCTYPE html>
<html>
<head>
	<title>Kmap_Register</title>
	<link rel="stylesheet" type="text/css" href="styl.css">
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
		<div class="col-md-6">
			<h2> Register Here</h2>
				<br>
			<form action="registration.php" method="post" autocomplete="off">	
					<div class="form-group">
						<label><h4> Username</h4></label>
						<input type="text" name="user" class="form-control" placeholder="UserName" required >						
					</div>
					<div class="form-group">
						<label><h4>Password</h4></label>
						<input type="Password" name="pass" class="form-control" placeholder="Password" required>						
					</div>
					<button type="submit" class="btn btn-info"> Register </button>

			</form>

		</div>			

		

		</div>

	</div>
</div>
</body>
</html>