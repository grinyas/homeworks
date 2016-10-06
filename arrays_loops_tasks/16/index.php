<?php
/**
 * Created by PhpStorm.
 * User: agrigor
 * Date: 06.10.2016
 * Time: 14:41
 */

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$i = 0;
foreach ($arr as $value) {
    if ($i > 2) {
        echo "<br>";
        $i = 0;
    }
    echo $value;
    $i++;
}