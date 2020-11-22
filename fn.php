<?php
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
