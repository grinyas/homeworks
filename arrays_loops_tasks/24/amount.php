<?php
/**
 * Created by PhpStorm.
 * User: agrigor
 * Date: 06.10.2016
 * Time: 22:57
 */

//Отсекаем пробелым и проверяем пришли ли числа
if (is_numeric(trim($_POST['num'])) && is_numeric(trim($_POST['numbers']))) {
    $count = 0;
//Число для подсчета вхождений
    $num = trim($_POST['num']);
//Массив чисел для подсчета вхождений
    $numbers = trim($_POST['numbers']);

    for ($i = 0; $i < strlen($numbers); $i++) {

        if ($num == $numbers[$i]) {
            $count++;
        }
    }
    echo "Сумма вхождений числа " . $num . " равняется - " . $count;
} else
    echo "Введите число!!";