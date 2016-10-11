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

    <?php
    if (!empty($_POST['txtarea1']) && !empty($_POST['txtarea2'])):
        //Передаем строки в функцию getCommonWords с textarea #1  и textarea #2
        $words = getCommonWords($_POST['txtarea1'], $_POST['txtarea2']); ?>
        <table>
            <?php $count = 0; ?>
            <tr>
                <?php foreach ($words as $word): ?>
                <?php if (!($count % 15)): ?>
            </tr>
            <tr>
                <?php endif; ?>
                <td> <?= $word;
                    $count++ ?></td>
                <?php endforeach; ?>
            </tr>
        </table>

        <?php
    else:
        echo "Поля необходимо заполнить текстом! Например:" ?>
        <a href='http://randomtextgenerator.com/' title='Генерация текста' target="_blank">такой текст</a>
    <?php endif; ?>

    <?php
    //Функция поиска общих слов в двух массивах
    function getCommonWords($a, $b)
    {
        $result = array();
        //Делаем со строки массив слов и находим массив с меньшим количеством слов
        if (str_word_count($a) <= str_word_count($b)) {
            $arr1 = str_word_count($a, 1);
            $arr2 = str_word_count($b, 1);
        } else {
            $arr1 = str_word_count($b, 1);
            $arr2 = str_word_count($a, 1);
        }
//        print_r($arr1);
        //Проверяем наличие слова меньшого массива в большем
        for ($i = 0; $i < count($arr1); $i++) {
            if (in_array($arr1[$i], $arr2)) {
                $result[] = $arr1[$i];
            }
        }
//        Если нет совпадений - вывести No match!
        if (count($result) == 0) {
            $result[] = "<strong>No match!</strong>";
        }
        return $result;
    } ?>


</div>
</body>
</html>

