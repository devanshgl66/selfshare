<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="icon" href="logo.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="logincss.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script>
		function popup(){
			document.getElementById('bkg').style.display='block';
		}
		function closed(){
			document.getElementById('bkg').style.display='none';
		}
	</script>
</head>
<body>
	<?php include 'loginphp.php'?>
	<div id="bkg" class="background">
		<div id="form1">
			<div id="img">
			<i id="person" class="material-icons">person_pin</i>
			</div>
			<form method="post" action="login.php">
				<span>Login Here</span><br><br><br>
				<label for="username">Username</label><br>
				<input type="text" name="username" id="username" autofocus placeholder="Enter Username" required><br>
				<label for="Password">Password</label><br>
				<input type="password" name="Password" id="passowrd" placeholder="Enter Password" required><br>
				<input type="submit" class="button" name="login" value="login">
				<input type="button" class="button" value="cancel" onclick="closed()"><br><br>
			</form>
			<a href="#" onclick="alert('Working on it')">Forgot Password?</a><br>
			<a href="register.php">Don't have a account?</a><br>
		</div>
	</div>
	<script type="text/javascript">
		var modal=document.getElementById('bkg');
		window.onclick = function(event) {
    		if (event.target == modal) {
     	  	 	modal.style.display = "none";
   			}
		}
	</script>
</body>
</html>