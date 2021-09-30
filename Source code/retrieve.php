<?php
include_once 'connection.php';
$result = mysqli_query($con,"SELECT * FROM book_add");
?>
<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
<link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<!-- creating table -->
    <table>
        <tr>
        <td>Book_ID</td>
        <td>Book Name</td>
        <td>Author</td>
        <td>Date of publsih</td>
        <td>Price</td>
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
</body>
</html> 