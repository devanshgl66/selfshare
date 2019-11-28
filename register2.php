<?php
$servername="localhost";
$uname="root";
$password="root";
$dbname="selfshare";
$conn=mysqli_connect($servername,$uname,$password,$dbname);
if($conn->connect_error){
	die("Connection failed".$conn->connect_error);
}
$username=$phone=$pwd="";
if(isset($_POST['signup_submit'])){
	$username=$_POST['uname'];
	$phone=$_POST['phno'];
	$pwd=$_POST['password'];

	$sql_u="select * from register where username='$username'";
	$sql_p="select * from register where phone='$phone'";

	$res_u=$conn->query($sql_u); 
	$res_p=$conn->query($sql_p);

	if(mysqli_num_rows($res_u)>0)
		$name_error="Username already exists";
	else if(mysqli_num_rows($res_p)>0)
		$phone_error="Phone number already registered";
	else{
		$sql_st="insert into register values('$username', '".md5($pwd)."','$phone')";
		if($conn->query($sql_st)){
			$success=1;
			echo "<script>alert('Registration successfull')</script>";
			echo "<script type='text/javascript'>location.href = 'selfshare.php';</script>";

		}
		else
			echo "Error occured";
	}
}
$conn->close();

?>