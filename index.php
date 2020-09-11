<?php

$sum = 0;
$arr = [

    'one' => 1,

    'two' => [

        'one' => 1,

        'seven' => 22,

        'three' => 32,

    ],

    'three' => [

        'one' => 1,

        'two' => [1,2],

    ],

    'four' => 5,

    'five' => [

        'three' => 32,

        'four' => 5,

        'five' => 12,

    ],

];

function sum($data)
{
    array_values($data);
    foreach ($data as $d) {

        if (is_array($d)) {
            $d = array_values($d);
            $data = array_merge($data, sum($d));
        }
    }
    $res = array_sum($data);
    return $res;
}
echo  sum($arr);