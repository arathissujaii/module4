<?php
include_once 'connection.php';
$result = mysqli_query($con,"SELECT * FROM book_add");
?>
<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
<link rel="stylesheet" href="student_add.css">
</head>
<body>
<!-- creating table -->
    <table>
        <tr>
        <td>Student_ID</td>
        <td>Student Name</td>
        <td>Address</td>
        <td>Date of birth</td>
        <td>Father name</td>
        <td>Standard</td>
        <td>Division</td>
        </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<!-- fetching results -->
    <tr class="<?php if(isset($classname)) echo $classname;?>">
    <td><?php echo $row["Student_id"]; ?></td>
    <td><?php echo $row["Student_name"]; ?></td>
    <td><?php echo $row["Address"]; ?></td>
    <td><?php echo $row["Date_of_birth"]; ?></td>
    <td><?php echo $row["Father_name"]; ?></td>
    <td><?php echo $row["Standard"]; ?></td>
    <td><?php echo $row["Division"]; ?></td>
    </tr>
<?php
$i++;
}
?>
</table>
</body>
</html> 