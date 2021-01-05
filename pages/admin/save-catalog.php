<?php
include '../conn.php';
include '../../fn.php';
$id = $_POST["id"];
$name = $_POST["name"];
$status = $_POST["status"];
$rand = rand(1, 100000);

if (trim($id) == "") {
    $sql = "INSERT INTO catalogsims(name,status,random)
            VALUES (
                '" . $name . "',
                '" . $status . "',
                '" . $random . "'
            )";
    if (checkLogin()) {
        $conn->query($sql);
    }
} else {
    $sql = "update catalogsims set name = '" . $name . "' , status = '" . $status . "' where id = " . $id . "  ";
    if (checkLogin()) {
        $conn->query($sql);
    }
}
include '../end-conn.php';
echo "<script>window.location = '../../index.php?page=admin&sub-page=add-catalog'</script>";
