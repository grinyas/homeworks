<?php
/**
 * Created by PhpStorm.
 * User: agrigor
 * Date: 06.10.2016
 * Time: 11:03
 */

$array = [1, 20, 15, 17, 24, 35];
print_r($array);

$sum = 0;

foreach ($array as $item) {
    $sum += $item;
}

echo "<br>Total: " . $sum;