<?php
$path = '2.jpg';

$img = getimagesize($path);
echo '<pre>';
print_r($img);

// Array
// (
//     [0] => 200
//     [1] => 200
//     [2] => 2
//     [3] => width="200" height="200"
//     [bits] => 8
//     [channels] => 3
//     [mime] => image/jpeg
// )
