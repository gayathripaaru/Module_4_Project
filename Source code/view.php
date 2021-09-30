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
    <td>Book ID</td>
    <td>Book name</td>
    <td>Author</td>
    <td>Date of publish</td>
    <td>Price</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
   <tr>
    <td><?php echo $row["Book_id"]; ?></td>
    <td><?php echo $row["Book_name"]; ?></td>
    <td><?php echo $row["Author"]; ?></td>
    <td><?php echo $row["Date_of_publish"]; ?></td>
    <td><?php echo $row["Price"]; ?></td>
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