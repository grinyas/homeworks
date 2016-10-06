<?php
/**
 * Created by PhpStorm.
 * User: agrigor
 * Date: 06.10.2016
 * Time: 12:57
 */

$arr = [2, 5, 9, 15, 0, 4];
print_r($arr);
echo "<br>";

foreach ($arr as $value){

    if($value > 3 && $value < 10){
        echo $value . "<br>";
    }
}