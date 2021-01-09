<?php
include '../conn.php';
include '../../fn.php';
$id = $_POST["id"];
$cat = $_POST["cats"];
$seq = $_POST["seq"];
$numbershow = $_POST["number"];
$number = $_POST["number"];
$network = $_POST["network"];
$baseprice = $_POST["baseprice"];
$priceinsim = $_POST["priceinsim"];
$price = $_POST["price"];
$openday = toDateSql($_POST["openday"]);
$closeday = toDateSql($_POST["closeday"]);
$status = "Y";
$remark = $_POST["remark"];

$number = str_replace("-", "", $number);
$number = str_replace("*", "", $number);
$number = str_replace("#", "", $number);
$number = str_replace("@", "", $number);


$len = strlen($number);
$count = 0;
$sum = 0;
$n1 = "";
$n2 = "";
$n3 = "";
$n4 = "";
$n5 = "";
$n6 = "";
$n7 = "";
$startw = $number[0] . $number[1] . $number[2];
while ($count < $len) {
    if ($count == 3) {
        $n1 = $number[$count];
    }
    if ($count == 4) {
        $n2 = $number[$count];
    }
    if ($count == 5) {
        $n3 = $number[$count];
    }
    if ($count == 6) {
        $n4 = $number[$count];
    }
    if ($count == 7) {
        $n5 = $number[$count];
    }
    if ($count == 8) {
        $n6 = $number[$count];
    }
    if ($count == 9) {
        $n7 = $number[$count];
    }
    $sum = $sum + $number[$count];
    $count++;
}
$sql = "SELECT * FROM numbersims where number = '" . $number . "'";

$result = $conn->query($sql);
if ($result->num_rows > 0 && trim($id) == "") {
    echo "<script>alert('เบอร์ซ้ำ')</script>";
    echo "<script>window.location = '../../index.php?page=admin&sub-page=add-number'</script>";
}
$sql = "";
if (trim($id) == "") {
    $sql = "INSERT INTO numbersims(seq,number,numbershow,catalogid,networkid,baseprice,priceinsim,openday,closeday,soldday,status,price,remark,sum,n1,n2,n3,n4,n5,n6,n7,stwith)
            VALUES (
                '" . $seq . "',
                '" . $number . "',
                '" . $numbershow . "',
                '" . $cat . "," . "',
                '" . $network . "',
                '" . $baseprice . "',
                '" . $priceinsim . "',
                NOW() ,
                NOW() ,
            '',
            'Y',
            '" . $price . "',
            '" . $remark . "',
            '" . $sum . "',
            '" . $n1 . "',
            '" . $n2 . "',
            '" . $n3 . "',
            '" . $n4 . "',
            '" . $n5 . "',
            '" . $n6 . "',
            '" . $n7 . "',	
            '" . $startw . "'
            )";
    if (checkLogin()) {
        $conn->query($sql);
    }
} else {
    $sql = "delete FROM numbersims where id = " . trim($id);
    $conn->query($sql);
    $sql = "INSERT INTO numbersims(seq,number,numbershow,catalogid,networkid,baseprice,priceinsim,openday,closeday,soldday,status,price,remark,sum,n1,n2,n3,n4,n5,n6,n7,stwith)
    VALUES (
        '" . $seq . "',
        '" . $number . "',
        '" . $numbershow . "',
        '" . $cat . "," . "',
        '" . $network . "',
        '" . $baseprice . "',
        '" . $priceinsim . "',
        CAST('" . $openday . "' AS DATE) ,
        CAST('" . $closeday . "' AS DATE) ,
    '',
    'Y',
    '" . $price . "',
    '" . $remark . "',
    '" . $sum . "',
    '" . $n1 . "',
    '" . $n2 . "',
    '" . $n3 . "',
    '" . $n4 . "',
    '" . $n5 . "',
    '" . $n6 . "',
    '" . $n7 . "',	
    '" . $startw . "'
    )";
    if (checkLogin()) {
        $conn->query($sql);
    }
}
include '../end-conn.php';
echo "<script>window.location = '../../index.php?page=admin&sub-page=add-number'</script>";
