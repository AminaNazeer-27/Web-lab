<?php
include 'conn.php';
if(isset($_POST['submit']))
{
	$fname=$_POST['name'];
	$sem=$_POST['semester'];
	$crse=$_POST['course'];
	$gender1=$_POST['gender'];
	
	$sql = "INSERT INTO students(Name, Semester, Coursename, Gender) VALUES ('$fname', '$sem', '$crse', '$gender1')";

	if (mysqli_query($conn, $sql)) {
  		header("Location: homepage.php");
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
		Student Name:
		<input type="textbox" name="name"><br>
		Semester:
		<input type="textbox" name="semester"><br>
		Course:
		<input type="textbox" name="course"><br>
		Gender:
		<input type="radio" name="gender" value="female"> Female
		<input type="radio" name="gender" value="male"> Male<br>
		<input type="submit" name="submit" value="Submit"><br>
		</form>
	</center>
	</body>
</html>
<?php
}
?>
