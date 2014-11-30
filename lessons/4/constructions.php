<?php

//Условные операторы:

echo '<h3>if</h3></br>';

if (true) {
    echo 'true</br>';
}

echo '<h3>if/else</h3></br>';

if (false) {
    echo 'true</br>';
} else {
    echo 'false</br>';
}

echo '<h3>if/elseif/else</h3></br>';

$a = 0;

if (1 == $a) {
    echo 'a = 1</br>';
} elseif (0 == $a) {
    echo 'a = 0</br>';
} else {
    echo '';
}

unset($a);

//Циклы:

echo '<h3>while</h3></br>';

$a = true;
while($a) {
    echo 'a = true</br>';
    break;
}

unset($a);

echo '<h3>for</h3></br>';

for($i = 0; $i < 5; $i++) {
    if($i == 3) {
        continue;
    }
    echo "i = {$i}</br>";
}

echo '<h3>foreach key=>value</h3></br>';

$array = array(
    'key_1' => 1, 
    'key_2' => 2, 
    'key_3' => 3
);

foreach ($array as $key => $value) {
    echo "key={$key} value={$value}</br>";
}

echo '<h3>foreach value</h3></br>';

foreach ($array as $value) {
    echo "value={$value}</br>";
}

unset($array);

//Конструкции выбора:

echo '<h3>switch/case</h3></br>';

$str = 'one';

switch ($str) {
    case('none'):
        echo 'none</br>';
        break;
    
    case('one'):
        echo 'one</br>';
        break;
    
    default :
        echo 'default</br>';
}