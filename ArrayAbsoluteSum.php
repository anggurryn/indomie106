<?php


function GetAbsSum (array $number){
    $result = 0;
    foreach ($number as $num){
        $result += abs($num);
    }
    echo $result;
}

GetAbsSum([1,-3,-2]);