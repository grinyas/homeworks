<?php
/**
 * Created by PhpStorm.
 * User: agrigor
 * Date: 06.10.2016
 * Time: 15:26
 */


$arr = ['Monday', 'Tuesday', 'Wednesday', 'Thursday',
    'Friday', 'Saturday', 'Sunday'];

foreach ($arr as $value) {

    if (date(l) == $value) {
        $day = $value;
        echo "<em>$day</em><br>";
        continue;
    }
    echo "$value<br>";
}

