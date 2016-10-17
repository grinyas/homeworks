<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>1</title>
</head>
<body>
<form method="post">
    <div>
        <div class="txtarea1">
            <label for="txtarea1">Поле для ввода текста №1</label>
            <p>
                <textarea name="txtarea1" id="txtarea1" cols="50" rows="10"></textarea>
            </p>
        </div>
        <div class="txtarea2">
            <label for="txtarea2">Поле для ввода текста №2</label>
            <p>
                <textarea name="txtarea2" id="txtarea2" cols="50" rows="10"></textarea>
            </p>
        </div>
        <div class="button">
            <input type="submit" value="Сравнить">
        </div>
    </div>
</form>
<div class="result">
<pre>
    <?php print_r(getCommonWords()) ?>
</pre>
</div>
</body>
</html>
<?php

function getCommonWords()
{
    if (empty($_POST['txtarea1']) || empty($_POST['txtarea2'])) die("Поля не заполнены!");

    $arr1 = str_word_count($_POST['txtarea1'], 1);
    $arr2 = str_word_count($_POST['txtarea2'], 1);

    $result = array_intersect($arr1, $arr2);

    return $result;
} ?>

