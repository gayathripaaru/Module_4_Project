<?php
include_once 'connection.php';
if(count($_POST)>0) {
    mysqli_query($con,"UPDATE book_add set Book_id='" . $_POST['number'] . "', Book_name='" . $_POST['name'] . "', Author='" . $_POST['author'] . "', Date_of_publish='" . $_POST['date'] . "' ,Price='" . $_POST['price'] . "' WHERE Book_id='" . $_POST['number'] . "'");
    $message = " <b>Record Modified Successfully </b><a href='dashboard.php'> Click to Back </a>";
    }
$result = mysqli_query($con,"SELECT * FROM book_add WHERE Book_id='" . $_GET['Book_id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Book Details</title>
<link rel="stylesheet" href="CSS/update.css">
</head>
<body>
       <form name="frmUser" method="post" action="">
<div>
    <?php if(isset($message)) { echo $message; } ?>
</div>
<div id="book">
     <a href="retrieve.php">Book Details</a>
</div>
<div id="forms">Book ID <br>
<input type="text" name="number" class="txtField" required value="<?php echo $row['Book_id']; ?>">
<br>
Book name<br>
<input type="text" name="name" class="txtField" required value="<?php echo $row['Book_name']; ?>">
<br>
Author<br>
<input type="text" name="author" class="txtField"required  value="<?php echo $row['Author']; ?>">
<br>
Date of publish<br>
<input type="text" name="date" class="txtField" required value="<?php echo $row['Date_of_publish']; ?>">
<br>
Price<br>
<input type="text" name="price" class="txtField"required  value="<?php echo $row['Price']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">
</div>
</form>
</body>
</html>



