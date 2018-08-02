<?php
include('connection.php');
if($_POST)
{
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$cpass=$_POST['cpassword'];
	
	if($pass==$cpass)
	{
		$code=md5(uniqid());
		$iq=mysql_query("insert into register(email,password,hash)values('{$email}','{$cpass}','{$code}')") or die(mysql_error());
	
		if($id)
		{
			
		}
	}
	else
	{
		echo"Password And Cinform Password Don't Match";
	}
}
?>


<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
<div class="container" align="center"> 
	
		<div class="row">
			<div class="col-md-6 offset-col-md3">
				<h2>User Registaration</h2>
	
		<form method="post">
		
		
		
		
		
		
		
		
		
		<input type="text" name="email" placeholder="Email" class="form-control">
		
	
	
		
		<input type="password" name="password" placeholder="Password" class="form-control">
	
	
	<input type="password" name="cpassword" placeholder="Confirm Password" class="form-control">

	
	<input type="submit" name="register" value="Register" class="btn btn-primary">
	
	
		
	
	</form>
	</div>
	</div>
</div>



</body>
</html>