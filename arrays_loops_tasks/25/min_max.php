<?php
/**
 * Created by PhpStorm.
 * User: agrigor
 * Date: 06.10.2016
 * Time: 23:28
 */

//Устанавливаем значение 0 для поиска максимального числа и присваиваем его переменной $max
$max = 0;
//Проверяем полученные данные и обрезаем пробелы
if (is_numeric(trim($_POST['num']))) {
    $size = (int)trim($_POST['num']);
//Устанавливаем значение $size + 1 для поиска минимального числа и присваиваем его переменной $min
    $min = $size + 1;

}

for ($i = 0; $i < $size; $i++) {
//Наполнение массива случайными числами от 1 до 100
    $arr_random[] = rand(1, 100);

    if (!($i % 10)) {
        echo "<br>";
    }
//Поиск максимального и минимального значений
    if ($max < $arr_random[$i]) {
        $max = $arr_random[$i];
    } elseif ($min > $arr_random[$i]) {
        $min = $arr_random[$i];
    }

    echo "$arr_random[$i]\t";
}
echo "<br>Max: $max - Min: $min<p>";

for ($i = 0; $i < $size; $i++) {
    if (!($i % 10)) {
        echo "<br>";
    }
//Поиск и замена местами максимального и минимального значений
    if ($arr_random[$i] == $max) {
        $arr_random[$i] = $min;
        echo "<b>$arr_random[$i]</b>\t";
        continue;
    } elseif ($arr_random[$i] == $min) {
        $arr_random[$i] = $max;
        echo "<b>$arr_random[$i]</b>\t";
        continue;
    }

    echo "$arr_random[$i]\t";
}

