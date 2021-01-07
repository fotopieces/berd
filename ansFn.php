<?php
function goodNumber($number)
{
    $goodNumber = array(
        14, 41, 15, 51, 16, 61, 19, 91, 22, 23, 32, 24, 42, 26, 62, 28,
        82, 29, 92, 35, 53, 36, 63, 39, 93, 44, 45, 54, 46, 64, 49, 94,
        55, 56, 65, 59, 95, 66, 69, 96, 78, 87, 79, 97, 89, 98,
        99
    );
    if (in_array($number, $goodNumber)) {
        return 16.6666667;
    } else {
        return 0;
    }
}

function getStar($number)

{
    $goodNumber = array(
        14, 41, 15, 51, 16, 61, 19, 91, 22, 23, 32, 24, 42, 26, 62, 28,
        82, 29, 92, 35, 53, 36, 63, 39, 93, 44, 45, 54, 46, 64, 49, 94,
        55, 56, 65, 59, 95, 66, 69, 96, 78, 87, 79, 97, 89, 98,
        99
    );
    if (in_array($number, $goodNumber)) {
        return 1;
    } else {
        return 0;
    }
}

function countGoodNumber($cnumber)
{
    $fn0 = substr($cnumber, 0, 3);
    $fn1 = substr($cnumber, 3, 2);
    $fn2 = substr($cnumber, 4, 2);
    $fn3 = substr($cnumber, 5, 2);
    $fn4 = substr($cnumber, 6, 2);
    $fn5 = substr($cnumber, 7, 2);
    $fn6 = substr($cnumber, 8, 2);

    $score = goodNumber($fn1) + goodNumber($fn2) + goodNumber($fn3) + goodNumber($fn4) + goodNumber($fn5) + goodNumber($fn6);
    return $score;
}
function printStar($cnumber)
{
    $fn0 = substr($cnumber, 0, 3);
    $fn1 = substr($cnumber, 3, 2);
    $fn2 = substr($cnumber, 4, 2);
    $fn3 = substr($cnumber, 5, 2);
    $fn4 = substr($cnumber, 6, 2);
    $fn5 = substr($cnumber, 7, 2);
    $fn6 = substr($cnumber, 8, 2);

    $len = strlen($cnumber);
    $sum = 0;
    $count = 0;
    while ($count < $len) {
        $sum = $sum + $cnumber[$count];
        $count++;
    }
    $score = getStar($sum) + getStar($fn1) + getStar($fn2) + getStar($fn3) + getStar($fn4) + getStar($fn5) + getStar($fn6);
    if ($score == 0) {
        return "<img src='img/bg-star.png' />
        <img src='img/bg-star.png' />
        <img src='img/bg-star.png' />
        <img src='img/bg-star.png' />
        <img src='img/bg-star.png' />
        <img src='img/bg-star.png' />
        <img src='img/bg-star.png' />";
    } else if ($score == 1) {
        return "<img src='img/star-y.png' />
        <img src='img/bg-star.png' />
        <img src='img/bg-star.png' />
        <img src='img/bg-star.png' />
        <img src='img/bg-star.png' />
        <img src='img/bg-star.png' /> 
        <img src='img/bg-star.png' />";
    } else if ($score == 2) {
        return "<img src='img/star-y.png' />
        <img src='img/star-y.png' />
        <img src='img/bg-star.png' />
        <img src='img/bg-star.png' />
        <img src='img/bg-star.png' />
        <img src='img/bg-star.png' />
        <img src='img/bg-star.png' />";
    } else if ($score == 3) {
        return "<img src='img/star-y.png' />
        <img src='img/star-y.png' />
        <img src='img/star-y.png' />
        <img src='img/bg-star.png' />
        <img src='img/bg-star.png' />
        <img src='img/bg-star.png' />
        <img src='img/bg-star.png' />";
    } else if ($score == 4) {
        return "<img src='img/star-y.png' />
        <img src='img/star-y.png' />
        <img src='img/star-y.png' />
        <img src='img/star-y.png' />
        <img src='img/bg-star.png' />
        <img src='img/bg-star.png' />
        <img src='img/bg-star.png' />";
    } else if ($score == 5) {
        return "<img src='img/star-y.png' />
        <img src='img/star-y.png' />
        <img src='img/star-y.png' />
        <img src='img/star-y.png' />
        <img src='img/star-y.png' />
        <img src='img/bg-star.png' />
        <img src='img/bg-star.png' />";
    } else if ($score == 6) {
        return "<img src='img/star-y.png' />
        <img src='img/star-y.png' />
        <img src='img/star-y.png' />
        <img src='img/star-y.png' />
        <img src='img/star-y.png' />
        <img src='img/star-y.png' />
        <img src='img/bg-star.png' />";
    } else if ($score == 7) {
        return "<img src='img/star-y.png' />
        <img src='img/star-y.png' />
        <img src='img/star-y.png' />
        <img src='img/star-y.png' />
        <img src='img/star-y.png' />
        <img src='img/star-y.png' />
        <img src='img/star-y.png' />";
    }
    return $score;
}
