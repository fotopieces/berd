<?php
include '../conn.php';
include '../../fn.php';
include '../check-login.php';
$id = $_GET["id"];
$sql = "delete FROM numbersims where id = " . $_GET["id"];
// echo $sql;
if (checkLogin()) {
    $conn->query($sql);
}
echo "<script>window.location = '../../index.php?page=admin&sub-page=add-number'</script>";
include '../end-conn.php';
