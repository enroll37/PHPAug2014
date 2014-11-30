<?php

call_user_func(function() {
    echo 'closure</br>';
});

echo '</br>';

$a = function($a, $b) {
    return $a + $b;
};

echo "10 + 10 = {$a(10, 10)}";

