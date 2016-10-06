<?php
/**
 * Created by PhpStorm.
 * User: agrigor
 * Date: 06.10.2016
 * Time: 11:26
 */

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

print_r($arr);

echo "<p> Key: </p> ";
foreach ($arr as $key => $value){
    echo  $key . "<br>" ;
}

echo "<p> Value: </p> ";
foreach ($arr as $key => $value){
    echo  $value . "<br>" ;
}