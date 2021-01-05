<?php
include '../conn.php';
include '../../fn.php';
include '../check-login.php';
$id = $_GET["id"];
$sql = "UPDATE numbersims SET status = 'Sold' , soldday =  CAST('" . date("Y-m-d") . "' AS DATE) where id = " . $_GET["id"];


// echo $sql;
if (checkLogin()) {
    $conn->query($sql);
}
include '../end-conn.php';
echo "<script>window.location = '../../index.php?page=admin&sub-page=add-number'</script>";
