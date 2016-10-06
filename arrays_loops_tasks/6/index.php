<?php
/**
 * Created by PhpStorm.
 * User: agrigor
 * Date: 06.10.2016
 * Time: 12:50
 */

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $key => $value){
    $en[] = $key;
    $ru[] = $value;
}

print_r($en);
echo "<br>";
print_r($ru);