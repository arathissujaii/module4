<?php
include_once 'connection.php';
$result = mysqli_query($con,"SELECT * FROM book_add");
?>
<!DOCTYPE html>
<html>
<head>
<title> View data</title>
<link rel="stylesheet" href="CSS/Style.css">
</head>
<body>
    <h1 class="details">All Book Details</h1>
<?php
if (mysqli_num_rows($result) > 0) {
?>
 <!-- table starts here -->
  <table>
    <tr>
    <td>Student ID</td>
    <td>Student name</td>
    <td>Address</td>
    <td>Date of Birth</td>
    <td>Father Name</td>
    <td>Standard</td>
    <td>Division</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
   <tr>
    <td><?php echo $row["Student_id"]; ?></td>
    <td><?php echo $row["Student_name"]; ?></td>
    <td><?php echo $row["Address"]; ?></td>
    <td><?php echo $row["Date_of_birth"]; ?></td>
    <td><?php echo $row["Father_Name"]; ?></td>
    <td><?php echo $row["Standard"]; ?></td>
    <td><?php echo $row["Division"]; ?></td>
  </tr>
    <?php
    $i++;
    }
    ?>
</table>
 <!-- table ends here -->
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>