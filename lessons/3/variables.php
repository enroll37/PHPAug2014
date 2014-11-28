<?php

echo 'Объявляем и выводим переменную $message</br>';

$message = 'Hellow World';

echo $message . '</br>';

echo 'Удаляем переменную $message при помоши unset</br>';

unset($message);

echo 'Пробуем вывести удаленную переменную $message</br>';

echo $message;