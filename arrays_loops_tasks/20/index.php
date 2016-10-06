<?php
/**
 * Created by PhpStorm.
 * User: agrigor
 * Date: 06.10.2016
 * Time: 15:44
 */

$sym = 'X';
for ($i = 0; $i < 20; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $sym;
    }
    echo "<br>";
}