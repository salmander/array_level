<?php

## function to find the array hierarchy level
function arrayLevel($arr)
{
    #echo 'Current $arr:'. print_r($arr, true) . PHP_EOL;
    $level = 1;

    if (is_array($arr)) {
        foreach ($arr as $val) {
            if (is_array($val)) {
                $level = arrayLevel($val) + 1;
            }
        }
    }

    return $level;
}
