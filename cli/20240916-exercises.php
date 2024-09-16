<?php

//1. uzd
// make loop that reverses a string

$str = "hello";
$arr = str_split($str);
$revarray = array_fill(0, strlen($str), NULL);
for ($i = 0; $i > strlen($str); $i++){
    array_push($revarray, $arr[strlen($str-$i)]);
}

echo $revarray;

