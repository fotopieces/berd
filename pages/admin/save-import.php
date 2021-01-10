<?php
include '../conn.php';
include '../../fn.php';
$data = $_POST["data"];
$datas = explode(PHP_EOL, $data);
$network = $_POST["network"];
$cat = $_POST["cats"];
$format = $_POST["format"];

foreach ($datas as $value) {
    $number = "";
    $values = explode(",", $value);
    $number = trim($values[0]);
    $numbershow = $number;
    $baseprice = 0;
    $priceinsim = 0;
    $price =  trim($values[1]);
    $openday = "";
    $closeday = trim($values[2]);
    $status = "Y";
    $remark = "";
    $seq = trim($values[3]);


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
    } else {
        if ($number != "") {
            $sql = "";
            $sql = "INSERT INTO numbersims(number,numbershow,catalogid,networkid,baseprice,priceinsim,openday,closeday,soldday,status,price,remark,sum,n1,n2,n3,n4,n5,n6,n7,stwith,seq)
                VALUES (
                    '" . $number . "',
                    '" . formatNumber($format, $number) . "',
                    '" . $cat . "," . "',
                    '" . $network . "',
                    '" . $baseprice . "',
                    '" . $closeday . "',
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
                '" . $startw . "',
                '" . $seq . "'
                )";
        }
        if (checkLogin()) {
            //echo $sql;
            $conn->query($sql);
        }
    }
}
include '../end-conn.php';
echo "<script>window.location = '../../index.php?page=admin&sub-page=add-import'</script>";
