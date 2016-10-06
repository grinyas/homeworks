<?php
/**
 * Created by PhpStorm.
 * User: agrigor
 * Date: 06.10.2016
 * Time: 11:10
 */


$array = [26, 17, 136, 12, 79, 15];
print_r($array);

$result = 0;
foreach ($array as $item) {
    $result += $item * $item;
}

echo "<br>Total: " . $result;