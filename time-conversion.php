<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s) {
    $is_pm = strpos($s, 'PM');
    $time_str = null;
    if($is_pm) {
        $time_str = substr($s, 0, $is_pm);
        $time_str = getSplitTime($time_str);
        if($time_str[0] !== '12') {
            $time_str[0] = $time_str[0] + 12;    
        } 
        
        
    } else {
        $time_str = substr($s, 0, strpos($s, 'AM'));
        $time_str = getSplitTime($time_str);
        if($time_str[0] === '12') {
            $time_str[0]  = '00';
             
        } 
    }
    $time_str = implode($time_str, ':');
    return $time_str;
    

}
function getSplitTime($time){
    return preg_split("/[:]/", $time);
}
