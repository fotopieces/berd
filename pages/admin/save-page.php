<?php
include '../conn.php';
include '../../fn.php';
$id = $_POST["id"];
$name = $_POST["name"];
$detail = $_POST["detail"];
$rand = rand(1, 100000);

if (trim($id) == "") {
    $sql = "INSERT INTO pagesims(name,detail,status)
            VALUES (
                '" . $name . "',
                '" . $detail . "',
                'S'
            )";
    if (checkLogin()) {
        $conn->query($sql);
    }
} else {
    $sql = "update pagesims set name = '" . $name . "' , detail = '" . $detail . "' where id = " . $id . "  ";
    if (checkLogin()) {
        $conn->query($sql);
    }
}
echo "<script>window.location = '../../index.php?page=admin&sub-page=add-page'</script>";
include '../end-conn.php';
