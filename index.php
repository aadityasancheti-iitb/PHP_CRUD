<?php
include 'connect.php';
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $desc = $_POST['desc'];
  $price = $_POST['price'];


  $sql = "INSERT INTO `smp_crud` ( `name`, `description`, `price`, `created_at`) VALUES ( '$name', '$desc', '$price', current_timestamp());";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header("location:display.php");
  } else {
    die(mysqli_error($con));
  }
}


?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CRUD using PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
  <div class="container my-5">
    <form method="POST">
      <div class="form-group">
        <label> Name </label>
        <input type="text" class="form-control" placeholder="Enter The Name Of The Product" name="name"
          autocomplete="off" />
      </div>
      <div class="form-group">
        <label> Description </label>
        <input type="text" class="form-control" placeholder="Enter The Description Of The Product" name="desc"
          autocomplete="off" />
      </div>
      <div class="form-group">
        <label> Price </label>
        <input type="text" class="form-control" placeholder="Enter The Price" name="price" autocomplete="off" />
      </div>


      <button type="submit" class="btn btn-primary my-5" name="submit">Submit</button>
    </form>
  </div>
</body>

</html>