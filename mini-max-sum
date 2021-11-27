<?php




function miniMaxSum($arr) {
    sort($arr);
    
    $sum_1 = sumMin(0, 0, $arr);
    $sum_2 = sumMax(1, 0, $arr);
    print_r($sum_1 . ' ' . $sum_2);
}

function sumMax($index, $sum, $arr) {
    if($index === count($arr)) {
        return $sum;
    }
    $sum +=  $arr[$index];
    $index++;
    return sumMax($index, $sum , $arr);
}
function sumMin($index, $sum, $arr) {
    if($index === count($arr) - 1) {
        return $sum;
    }
    $sum +=  $arr[$index];
    $index++;
    return sumMin($index, $sum , $arr);
}
