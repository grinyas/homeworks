<?php
/**
 * Created by PhpStorm.
 * User: agrigor
 * Date: 06.10.2016
 * Time: 13:03
 */


$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

echo "<b>Used foreach </b><br>";
foreach ($arr as $value) {
    $result .= $value;
}

echo "Result: " . $result;
echo "<br> Gettype: " . gettype($result) . "<br>";
unset($result);

echo "<b>Used while </b><br>";
$i = 0;
while ($i < count($arr)) {
    $result .= $arr[$i];
    $i++;
}

echo "Result: " . $result;
echo "<br> Gettype: " . gettype($result). "<br>";
unset($result);

echo "<b>Used for </b><br>";
for ($i = 0; $i < count($arr); $i++) {
    $result .= $arr[$i];
}

echo "Result: " . $result;
echo "<br> Gettype: " . gettype($result);