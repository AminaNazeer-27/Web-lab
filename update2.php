<?php
include 'conn.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $semester = $_POST['semester'];
    $course = $_POST['course'];
    $gender = $_POST['gender'];
    $sql = "UPDATE students 
            SET Name = '$name', Semester = '$semester', Coursename = '$course', Gender = '$gender' 
            WHERE studentid = '$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: homepage.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    exit();
}

if (isset($_GET['studentid'])) {
    $student = $_GET;
} else {
    echo "No student data provided.";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Student Details</title>
</head>
<body>
    <h2>Update Student Details</h2>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $student['studentid']; ?>">

        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $student['Name']; ?>" required><br><br>

        <label for="semester">Semester:</label>
        <input type="text" name="semester" value="<?php echo $student['Semester']; ?>" required><br><br>

        <label for="course">Course:</label>
        <input type="text" name="course" value="<?php echo $student['Coursename']; ?>" required><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="male" <?php if ($student['Gender'] == 'male') echo 'checked'; ?>> Male
        <input type="radio" name="gender" value="female" <?php if ($student['Gender'] == 'female') echo 'checked'; ?>> Female<br><br>

        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>
