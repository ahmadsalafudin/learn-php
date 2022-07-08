<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Salaph");
$sayHello("Udin");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Salaph", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("Salaph", $filterFunction);

$firstName = "Salaph";
$lastName = "Alghibrany";

$sayHelloUdin = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloUdin();

$firstName = "Udin";
$lastName = "Petot";
$sayHelloUdin();
