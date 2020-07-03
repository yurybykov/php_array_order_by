<?php

require_once __DIR__ . '/../src/array_order_by.php';

$data = [];
$data[] = ['volume' => 67, 'edition' => 2];
$data[] = ['volume' => 86, 'edition' => 1];
$data[] = ['volume' => 85, 'edition' => 6];
$data[] = ['volume' => 98, 'edition' => 2];
$data[] = ['volume' => 86, 'edition' => 6];
$data[] = ['volume' => 67, 'edition' => 7];

$sorted = array_order_by($data, 'volume', SORT_DESC, 'edition', SORT_ASC);
$expect = [
    0 => [
        "volume" => 98,
        "edition" => 2,
    ],
    1 => [
        "volume" => 86,
        "edition" => 1,
    ],
    2 => [
        "volume" => 86,
        "edition" => 6,
    ],
    3 => [
        "volume" => 85,
        "edition" => 6,
    ],
    4 => [
        "volume" => 67,
        "edition" => 2,
    ],
    5 => [
        "volume" => 67,
        "edition" => 7,
    ],
];

var_dump($sorted === $expect);exit;
