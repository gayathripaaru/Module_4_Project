<?php
include_once 'connection.php';
$sql = "DELETE FROM book_add WHERE Book_id='" . $_GET["Book_id"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
    header("Refresh:3; url=dashboard.php");
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>