<?php
$servername="localhost";
$uname="root";
$password="root";
$dbname="selfshare";
$conn=mysqli_connect($servername,$uname,$password,$dbname);
if($conn->connect_error){
	echo "<script>alert('Connection error');</script>";
}
$login_success=0;
$username=$pwd="";
if(isset($_POST['login'])){
	$username=$_POST['username'];
	$pwd=$_POST['Password'];
	$sql="SELECT username,password from register where username='$username'";
	$res=$conn->query($sql);
	if(mysqli_num_rows($res)==0){
		echo "<script>alert('Wrong Username or password');</script>";
	}
	else if(mysqli_num_rows($res)>0){
		$epwd=md5($pwd);
		while($row = $res->fetch_assoc()){
			$pwd2=$row['password'];
			if($epwd!=$pwd2){
				echo "<script>alert('Wrong Username or password');</script>";
				echo "<script type='text/javascript'>location.href = 'selfshare.php';</script>";
			}
			else{
				echo "<script>alert('Login Successfully');</script>";
				echo "<script type='text/javascript'>location.href = 'selfshare.php';</script>";
				$login_success=1;
			}
		}
	}
}
?>