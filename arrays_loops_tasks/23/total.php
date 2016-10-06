<?php
/**
 * Created by PhpStorm.
 * User: agrigor
 * Date: 06.10.2016
 * Time: 22:21
 */

if (is_numeric($_POST['numbers'])) {
    $sum = 0;
    $numbers = $_POST['numbers'];

    for ($i = 0; $i < strlen($numbers); $i++) {
        $sum += $numbers[$i];
    }
    echo "Сумма чисел " . $_POST['numbers'] . " равняется - " . $sum;
} else
    echo "Введите число!!";