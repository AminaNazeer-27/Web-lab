<?php
include 'conn.php';
if (isset($_GET['studentid'])) {
    
    $studentid = $_GET['studentid'];
    $sql = "SELECT * FROM students WHERE studentid = '$studentid'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $student = mysqli_fetch_assoc($result);
        $query = http_build_query($student);
        header("Location: update2.php?$query");
        exit();
    } else {
        echo "No student found with ID: $studentid";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Retrieve Student Details</title>
</head>
<body>
    <h2>Retrieve Student Details</h2>
    <form method="GET" action="">
        <label for="studentid">Student ID:</label>
        <input type="text" name="studentid" id="studentid" required>
        <button type="submit">Retrieve</button>
    </form>
</body>
</html>
