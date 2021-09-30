
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add book details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/dashboard.css">
</head>
<body>
<div class="container">
  <!-- heading -->
   <h1 id="details">Add Book Details</h2>
   <!-- book details adding form starts here -->
   <form action="add.php" method="POST">
   <div class="form-group">
   <label for="id">Book Id</label>
   <input type="text" class="form-control"  placeholder="Book Number" name="number" required>
</div>
     <div class="form-group">
     <label for="name">Book Name</label>
     <input type="text" class="form-control"  placeholder="Book Name" name="name" required>
</div>
     <div class="form-group">
     <label for="author">Author</label>
     <input type="text" class="form-control" placeholder=Author name="author" required>
</div>
    <div class="form-group">
    <label for="date">Date of publish</label>
    <input type="date" class="form-control"  placeholder="Date" name="date" required>
</div>
    <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control"  placeholder="Price" name="price" required>
</div>
    <button type="submit" id="Add" class="btn btn-default">Add</button>
   </form>
</div>
   <!-- book details adding form starts here -->
</body>
</html>
