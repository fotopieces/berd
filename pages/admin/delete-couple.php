<?php
include '../conn.php';
include '../../fn.php';
include '../check-login.php';
$id = $_GET["id"];
$sql = "delete FROM pagesims where id = " . $_GET["id"];
// echo $sql;
if (checkLogin()) {
    $conn->query($sql);
}
include '../end-conn.php';
echo "<script>window.location = '../../index.php?page=admin&sub-page=add-couple'</script>";
