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




$arr1 = [
    "tut",
    "tut2" => [
        "hier1",
        "hier2",
    ],
];

$arr1 = [
    "hier1" => [
        "hier2" => [
            "hier3" => [
                "2",
            ],
        ],
    ],
];

$arr1 = [
    "1",
    "2",
    "hier1" => [
        "hier2" => [
            "hier3" => [
                "2",
            ],
        ],
    ],
];

$arr1 = [
    "1",
    "2",
    "3" => [
        "hier2" => [
            "hier3" => [
                "2",
            ],
        ],
    ],
    "4",
    "5",
    "6" => [
        "1",
        "2",
        "3",
        "4" => [
            "1",
            "2" => [
                "1",
                "2" => [
                    "1",
                    "2",
                    "3" => [
                        "1",
                    ],
                ],
            ],
        ],
    ],
];

echo 'The highest level in the given array is: ' . arrayLevel($arr1) . PHP_EOL;
