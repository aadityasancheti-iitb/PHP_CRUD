<?php
include 'connect.php';
$id = $_GET['update-id'];
$sql = "SELECT * from `smp_crud` where `S.no.` =$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$desc = $row['description'];
$price = $row['price'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];


    $sql = "UPDATE `smp_crud` SET `name` = '$name', `description` = '$desc', `price` = '$price' WHERE `smp_crud`.`S.no.` = $id;";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "updated successfully";
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
    <title>CRUD OPERATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <div class="container my-5">
        <form method="POST">
            <div class="form-group">
                <label> Name </label>
                <input type="text" class="form-control" placeholder="Enter The Name Of The Product" name="name"
                    autocomplete="off" value=<?php
                    echo "$name" ?> />
            </div>
            <div class="form-group">
                <label> Description </label>
                <input type="text" class="form-control" placeholder="Enter The Description Of The Product" name="desc"
                    autocomplete="off" value=<?php
                    echo "$desc" ?> />
            </div>
            <div class="form-group">
                <label> Price </label>
                <input type="text" class="form-control" placeholder="Enter The Price" name="price" autocomplete="off"
                    value=<?php
                    echo "$price" ?> />
            </div>



            <button type="update" class="btn btn-primary" name="submit">Update
            </button>
        </form>
    </div>
</body>

</html>