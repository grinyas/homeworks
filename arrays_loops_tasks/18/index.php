<?php
/**
 * Created by PhpStorm.
 * User: agrigor
 * Date: 06.10.2016
 * Time: 15:09
 */

$arr = ['Понедельник', 'Вторник', 'Среда', 'Четверг',
    'Пятница', 'Суббота', 'Воскресенье'];

foreach ($arr as $key => $value) {
    if ($key == 5 || $key == 6){
        echo "<b>$value</b><br>";
        continue;
    }
    echo "$value<br>";
}