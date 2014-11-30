<?php

function sayHello($name = 'World') {
    echo "Hello <b>{$name}</b></br>"; 
}

sayHello();
sayHello('PHP');

echo '</br>';

function add($a, $b) {
    return $a + $b;
}

echo add(10, 10) . '</br>';

echo '</br>';

function print_array(array $array) {
    foreach ($array as $value) {
        echo "{$value}</br>";
    } 
}

print_array(array(1,2,3,4,5));