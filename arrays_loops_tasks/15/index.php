<?php
/**
 * Created by PhpStorm.
 * User: agrigor
 * Date: 06.10.2016
 * Time: 14:36
 */

$arr = [4, 2, 5, 19, 13, 0, 10];

$count = 0;
foreach ($arr as $value){
    if(isset($value)){
        $count++;
    }
}
echo "<b>Количество элементов массива:</b> " . $count;