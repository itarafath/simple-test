<?php

/**
 *
 *     TASK 1
 *
 *     Create a function that takes the following array and finds the total sum of all the integers
 *
 *     The function signature should be as follows
 *     function find_sum(array $values) : int { }
 *
 */

$values =
    [
    5,
    76,
    32,
    [
        5,
        12,
        84,
        72,
        [
            87,
            34,
            53,
            -5,
        ],
    ],
];

function find_sum(array $values): int
{

    $sum = 0;
    array_walk_recursive($values, function ($item, $key) use (&$sum) {
        $sum += $item;
    });
    return $sum;
}

echo find_sum($values) . '<br>';

/**
 *      TASK 2
 *
 *      Create a function that takes the following string and reverses it without the use of strrev()
 *
 *      The function signature should be as follows
 *      function string_reverse(string $str) : string { }
 *
 */

$str = 'jbhiu39rfndsfhudfshsdjf^!8sfdsjb';
function string_reverse(string $str): string
{
    $string = str_split($str);
    $reverse = array_reverse($string);
    $output_string = join('', $reverse);

    return $output_string;
}

echo string_reverse($str) . '<br>';

/*
 *       TASK 3
 *
 *       Using a binary search, find the index of the array, where the specficed input is located, from the array of integers.
 *
 *       The function signature should be as follows
 *       function binary_search(array $data, int $find) : int { }
 *
 *       e.g
 *       $data = [1, 2, 3];
 *       binary_search($data, 2) // 1
 *
 */

$data = [
    3, 2, 4, 1, 1, 2, 3, 52, 1923, 84, 33, -4, 984, 21, 'r', 'ewdd', false,
    function () {
    },
];
$find = 1923;
function binary_search(array $data, int $find): int
{

    // return array_search($find, $data);
    foreach ($data as $key => $value) {
        if ($value == $find) {
            return $key;
        }
    }
}
echo binary_search($data, $find);
