<?php
/**
 * Created by PhpStorm.
 * User: agrigor
 * Date: 06.10.2016
 * Time: 14:30
 */

$arr = [4, 2, 5, 19, 13, 0, 10];

foreach ($arr as $e) {

    if ($e == 2 || $e == 3 || $e == 4) {
        echo "Есть!";
        break;
    } else {
        echo "Нет!!";
        break;
    }
}