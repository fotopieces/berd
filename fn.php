<?php
function checkSql($sql)
{
    $have = strpos($sql, "RAND()");

    if ($have != "") {

        return "SELECT * FROM numbersims where status = 'Y'";
    } else {

        return $sql;
    }
}
function todate($date)
{
    $pieces = explode("-", $date);
    if ($pieces[0] == "0000") {
        return "ยังไม่ได้ขาย";
    } else {
        return $pieces[2] . "-" . $pieces[1] . "-" . $pieces[0];
    }
}

function toDateSql($date)
{
    $pieces = explode("-", $date);
    if ($pieces[0] == "0000") {
        return "";
    } else {
        return $pieces[2] . "-" . $pieces[1] . "-" . $pieces[0];
    }
}

function checkLogin()
{
    return $_COOKIE["login"] == "netjang";
}

function colornumber($number)
{

    //echo "---->".str_replace("-","",$number);

    //echo "<br>".$number;
    $pieces = explode("*", $number);
    if (isset($pieces[1])) {
        //if(!commonfn::isnull($pieces[1])){

        $rp = "<font color='red'>" . $pieces[1] . "</font>";
        $number = str_replace("*" . $pieces[1] . "*", $rp, $number);
    }
    $pieces = explode("@", $number);
    if (isset($pieces[1])) {
        //if(!commonfn::isnull($pieces[1])){

        $rp = "<font color='green'>" . $pieces[1] . "</font>";
        $number = str_replace("@" . $pieces[1] . "@", $rp, $number);
    }
    $pieces = explode("#", $number);
    if (isset($pieces[1])) {
        //if(!commonfn::isnull($pieces[1])){

        $rp = "<font color='orange'>" . $pieces[1] . "</font>";
        $number = str_replace("#" . $pieces[1] . "#", $rp, $number);
    }
    return $number;
}
function subNumber($number)
{
    $nn0 = substr($number, 0, 3);
    $nn1 = substr($number, 3, 2);
    $nn2 = substr($number, 4, 2);
    $nn3 = substr($number, 5, 2);
    $nn4 = substr($number, 6, 2);
    $nn5 = substr($number, 7, 2);
    $nn6 = substr($number, 8, 2);
    $len = strlen($number);
    $sum = 0;
    $count = 0;
    while ($count < $len) {
        $sum = $sum + $number[$count];
        $count++;
    }

    return $nn0 . "-"
        . $nn1 . " "
        . $nn2 . " "
        . $nn3 . " "
        . $nn4 . " "
        . $nn5 . " "
        . $nn6 . " " . "  (" . $sum . ")";
}

function formatNumber($format, $number)
{
    if ($format == '000-0000000') {
        return substr($number, 0, 3) . "-" . substr($number, 3, 10);
    } else if ($format == '00-0000-0000') {
        return substr($number, 0, 2) . "-" . substr($number, 2, 4) . "-" . substr($number, 6, 4);
    } else if ($format == '000-000-0000') {
        return substr($number, 0, 3) . "-" . substr($number, 3, 3) . "-" . substr($number, 6, 4);
    } else if ($format == '000-00000-00') {
        return substr($number, 0, 3) . "-" . substr($number, 3, 5) . "-" . substr($number, 8, 2);
    } else if ($format == '000-000-0-000') {
        return substr($number, 0, 3) . "-" . substr($number, 3, 3) . "-" . substr($number, 6, 1) . "-" . substr($number, 7, 3);
    } else if ($format == '00-00-00-00-00') {
        return substr($number, 0, 2) . "-" . substr($number, 2, 2) . "-" . substr($number, 4, 2) . "-" . substr($number, 6, 2) . "-" . substr($number, 8, 2);
    }
}
