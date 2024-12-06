<?php
include 'connection.php';
if(isset($_POST['submit']))
{
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$cno=$_POST['contactnumber'];
	$email=$_POST['mail'];
	$uname=$_POST['username'];
	$psswrd=$_POST['password'];
	$sql = "INSERT INTO userregistration(First_Name,Last_Name,Phone_No,Email,User_Name,Password)VALUES ('$fname','$lname','$cno','$email','$uname','$psswrd')";

	if (mysqli_query($conn, $sql)) {
  		echo "<br>New record created successfully";
		} else {
  		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
		Firstname:
		<input type="textbox" name="firstname"><br>
		Lastname:
		<input type="textbox" name="lastname"><br>
		Contact Number:
		<input type="textbox" name="contactnumber"><br>
		Email:
		<input type="textbox" name="mail"><br>
		Username:
		<input type="textbox" name="username"><br>
		Password:
		<input type="textbox" name="password"><br>
		<input type="submit" name="submit" value="Submit"><br>
	</form>
	</center>
	</body>
</html>
<?php
}
?>
