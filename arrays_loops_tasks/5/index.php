<?php
/**
 * Created by PhpStorm.
 * User: agrigor
 * Date: 06.10.2016
 * Time: 11:40
 */


$arr_keys = ['Коля', 'Вася', 'Петя'];
$arr_values = ['200', '300', '400'];

$arr = array_combine($arr_keys, $arr_values);

print_r($arr);
echo "<p>";
foreach ($arr as $name => $pay) {
    echo $name . " — зарплата " . $pay . " долларов.<br>";
}
echo "</p>";