<?php
/**
 * Created by PhpStorm.
 * User: grinyas
 * Date: 07.10.2016
 * Time: 17:14
 */

$even = 1;
for ($i = 0; $i < 5; $i++) {
//Наполнение массива случайными числами от 1 до 100
    $arr_random[] = rand(1, 100);

    if (!($i % 10)) {
        echo "<br>";
    }

    if ($arr_random[$i] > 0 && !($arr_random[$i] % 2)) {
        $even *= $arr_random[$i];
    } elseif ($arr_random[$i] > 0 && ($arr_random[$i] % 2)) {
        echo "$arr_random[$i]\t";
    }
}
echo "<br>Произведение чисел с парным индексом: <b>$even</b>";

