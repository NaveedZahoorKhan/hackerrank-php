<?php

/*
 * Complete the 'matchingStrings' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. STRING_ARRAY strings
 *  2. STRING_ARRAY queries
 */

function matchingStrings($strings, $queries) {
    $arr = [];
    foreach($queries as $query) {
        $count = finder($strings, 0, $query, 0);
        array_push($arr, $count);
    }
    return $arr;

}
function finder($array, $index, $query, $count) {
    if($index === count($array)) {
        return $count;
    } 
    
    $count = $query === $array[$index] ? $count+1 : $count + 0;
    $index++;
    return finder($array, $index, $query, $count);
}
