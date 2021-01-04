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
