<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    $count_positive = 0;
    $count_zeroes = 0;
    $count_negative = 0;
    $array_length = count($arr);
    foreach($arr as $item) {
        if($item > 0) {
            $count_positive++;
        } else if ($item < 0) {
            $count_negative++;
        } else {
            $count_zeroes++;
        }
    }
    print( number_format((float)$count_positive/$array_length, 6, '.', '')  . PHP_EOL);
    print( number_format((float)$count_negative/$array_length, 6, '.', '')  . PHP_EOL);
    print( number_format((float)$count_zeroes/$array_length, 6, '.', '')  . PHP_EOL);


}
