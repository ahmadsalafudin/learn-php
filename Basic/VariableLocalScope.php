<?php

function createName()
{
    $name = "Dani"; // local scope
}

createName();
echo $name . PHP_EOL;
