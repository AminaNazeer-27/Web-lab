<?php
include 'conn.php';
if(isset($_POST['submit']))
{
	
	$uname=$_POST['username'];
	$psswrd=$_POST['password'];
	$sql = "SELECT * FROM userregistration where user_name='$uname' and         password='$psswrd'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0)
	 {
  			header("location:welcome.php")   ;
	 } 
	else
	{
			header("location:error.php")   ;
	}
 	 

	mysqli_close($conn);
}
else
{
?>
<html>
	<body>
	<center>
		<form action="" method="post">
		Username:
		<input type="textbox" name="username"><br><br>
		Password:
		<input type="password" name="password"><br>
		<a href="reg.php">New User?Sign Up</a><br>
		<input type="submit" name="submit" value="Submit"><br>
	</form>
	</center>
	</body>
</html>
<?php
}
?>
