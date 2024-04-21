<?php
include 'connect.php';
if (isset($_GET['delete-id']))
    $id = $_GET['delete-id'];
$sql = "DELETE FROM `smp_crud` WHERE `smp_crud`.`S.no.` = '$id'";
$result = mysqli_query($con, $sql);
if ($result) {
    header('location:display.php');
} else {
    die(mysqli_error($con));
    ;
}

?>