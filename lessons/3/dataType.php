<?php
echo '
Для вывода данных в PHP есть несколько функций: echo, print, var_dump, etc..
</br>
Далее будет отображен вывод функции var_dump для всех основных типов данных в PHP.
';

var_dump(1); //Целые числа

var_dump(1.0); //Числа с плавающей запятой

var_dump(false); //Булев тип

var_dump('Hellow world!'); //Строка

var_dump(array(1,2,3,4,5)); //Массив

var_dump(new stdClass()); //Объект

var_dump(NULL); //Пустой

var_dump(fopen(__FILE__, 'a')); //Ресурс