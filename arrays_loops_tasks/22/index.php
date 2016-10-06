<?php
/**
 * Created by PhpStorm.
 * User: agrigor
 * Date: 06.10.2016
 * Time: 16:31
 */

for ($i = 1; $i < 12; $i++) {

    if ($i % 2) {
        for ($j = 1; $j < $i; $j++) {
            echo "X";
        }
        echo "<br>";
    }
}