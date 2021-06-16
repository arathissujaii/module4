<?php
include_once 'connection.php';
$sql = "DELETE FROM student_add WHERE student_id='" . $_GET["student_id"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
    header("Refresh:3; url=dashboard.php");
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>