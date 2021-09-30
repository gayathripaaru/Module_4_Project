<?php
include_once 'connection.php';
$result = mysqli_query($con,"SELECT * FROM book_add");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="CSS/Style.css">
<title>Delete  data</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
       <h1 class="details">Delete Book Details</h1>
	   <!-- table starts here -->
       <table class="table table-bordered">   
    <tr>
        <th>Book ID</th>
        <th>Book name</th>
        <th>Author</th>
        <th>Date of publish</th>
        <th>Price</th>
        <th>Delete Book</th>
      </tr>
<!-- fetching data from databse -->
 <?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["Book_id"]; ?></td>
	<td><?php echo $row["Book_name"]; ?></td>
	<td><?php echo $row["Author"]; ?></td>
	<td><?php echo $row["Date_of_publish"]; ?></td>
	<td><?php echo $row["Price"]; ?></td>
	<td><a href="delete-process.php?Book_id=<?php echo $row["Book_id"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
 <!-- table ends here -->
</body>
</html>