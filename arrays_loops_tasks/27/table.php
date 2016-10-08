<?php
/**
 * Created by PhpStorm.
 * User: grinyas
 * Date: 08.10.2016
 * Time: 13:57
 */

$row = 1;
$col = 1;
$colors = array('red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green', 'DarkOrange');

if (!empty($_POST['row']) && !empty($_POST['col'])) {

    $row = trim($_POST['row']);
    $col = trim($_POST['col']);

    echo "<table border='solid'>";

    for ($i = 0; $i < $row; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $col; $j++) {
//            echo "<td style='background-color:" . $colors[array_rand($colors, 1)] . "'>";
            echo "<td style='background-color:#"
                . dechex(rand(0, 255))
                . dechex(rand(0, 255))
                . dechex(rand(0, 255))
                . "'>";
            echo rand(100, 100000);
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else
    echo "Введите количество строк и столбцов в таблице";