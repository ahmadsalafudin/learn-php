<?php

$first = [
    "first_name" => "Salaph"
];

$last = [
    "first_name" => "Ikbal",
    "last_name" => "Alghibrany"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Salaph",
    "last_name" => "Alghibrany"
];

$b = [
    "last_name" => "Alghibrany",
    "first_name" => "Salaph"
];

var_dump($a == $b);
var_dump($a === $b);