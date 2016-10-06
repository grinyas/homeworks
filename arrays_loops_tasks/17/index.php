<?php
/**
 * Created by PhpStorm.
 * User: agrigor
 * Date: 06.10.2016
 * Time: 14:58
 */

$arr = ['Январь', 'Февраль', 'Март',
        'Апрель', 'Май', 'Июнь',
        'Июль', 'Август', 'Сентябрь',
        'Октябрь', 'Ноябрь', 'Декабрь'];

foreach ($arr as $value) {

    if ($value == 'Октябрь') {
        $mount = 'Октябрь';
        echo "<b>Октябрь</b><br>";
        continue;
    }
    echo "$value <br>";
}