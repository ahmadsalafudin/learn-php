<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Salaph", "strtoupper");
sayHello("Salaph", "strtolower");
sayHello("Salaph", function (string $name): string {
    return strtoupper($name);
});
sayHello("Salaph", fn($name) => strtoupper($name));