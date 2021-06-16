<html>
<body>
    <center>
        <?php
     // servername => localhost
        // username => root
        // password => empty
        // database name => admission
        $conn = mysqli_connect("localhost", "root", "", "admission");
          // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          // Taking all 
        $Id =  $_REQUEST['number'];
        $name = $_REQUEST['name'];
        $address =  $_REQUEST['address'];
        $date = $_REQUEST['date'];
        $father = $_REQUEST['father'];
        $standard =  $_REQUEST['standard'];
        $devision = $_REQUEST['devision'];
          // Performing insert query execution
        // here our table name is book_add
        $sql = "INSERT INTO details_add  VALUES ('$Id', 
            '$name','$address','$date','$father','$standard','$devision')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3 >Student details added Successfully</h3>";
            header("Refresh:3; url=dashboard.php"); 
     } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
                  
        }
        // Close connection
        mysqli_close($conn);
    ?>
</body>
</html>