<html>
<body>
    <center>
        <?php
     // servername => localhost
        // username => root
        // password => empty
        // database name => library
        $conn = mysqli_connect("localhost", "root", "", "library");
          // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          // Taking all 
        $Id =  $_REQUEST['number'];
        $name = $_REQUEST['name'];
        $author =  $_REQUEST['author'];
        $date = $_REQUEST['date'];
        $price = $_REQUEST['price'];
          // Performing insert query execution
        // here our table name is book_add
        $sql = "INSERT INTO book_add  VALUES ('$Id', 
            '$name','$author','$date','$price')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3 >Book details added Successfully</h3>";
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