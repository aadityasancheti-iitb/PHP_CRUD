<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Crud operation</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Add a New Product
            </a>
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `smp_crud`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['S.no.'];
                        $name = $row['name'];
                        $desc = $row['description'];
                        $price = $row['price'];
                        echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $desc . '</td>
                    <td>' . $price . '</td>
                    <td> 
                    <button class="btn btn-primary"><a href="update.php?
                    update-id=' . $id . '" class="text-light">Update</a></button>
                    <button class="btn btn-danger"><a href="delete.php?
                    delete-id=' . $id . '" class="text-light">Delete</a></button>
                </tr>';
                    }
                }



                ?>

            </tbody>
        </table>
    </div>
</body>

</html>