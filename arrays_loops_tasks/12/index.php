<?php
/**
 * Created by PhpStorm.
 * User: agrigor
 * Date: 06.10.2016
 * Time: 14:10
 */


$n = 1000;
$num =0;
while (true) {
    $num++;
    $n /= 2;

    if ($n < 50) {
        break;
    }
}
echo "<b>Result:</b> " . $n . "<br><b>Iteration:</b> " . $num;