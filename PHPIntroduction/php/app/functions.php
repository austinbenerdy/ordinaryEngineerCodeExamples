<?php


function sayHi() :void
{
    echo "Hi!" . PHP_EOL;
}

function greet(string $name) :void
{
    echo "Hello $name" . PHP_EOL;
}

function returnGreet(string $name) :string
{
    return "Hello $name";
}

sayHi();
greet("Austin");

echo returnGreet('Jenny') . PHP_EOL;