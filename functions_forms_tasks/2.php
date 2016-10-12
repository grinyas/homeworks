<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>2</title>
</head>
<body>
<form method="post">
    <div>
        <div class="txtarea">
            <label for="txtarea">Поле для ввода текста</label>
            <p>
                <textarea name="txtarea" id="txtarea" cols="50" rows="10"></textarea>
            </p>
        </div>

        <div class="button">
            <input type="submit" value="Найти">
        </div>
    </div>
</form>
<div class="result">
    <p>ТОП-3 длинных слов в тексте</p>
    <?php
    if (!empty($_POST['txtarea'])):
        //Передаем строки в функцию getCommonWords с textarea #1  и textarea #2
        $top3 = getTop3Words($_POST['txtarea']); ?>
        <table class="result">
            <?php for ($i = 0; $i < 3; $i++):
                ?>
                <tr>
                    <td>#<?= $i + 1 ?></td>
                    <td><strong>Size: </strong><?= strlen($top3[$i]); ?></td>
                    <td><strong>Word:</strong> <?= $top3[$i] ?></td>
                </tr>
            <?php endfor;
            ?>
        </table>
        <?php
    else:
        echo "Поля необходимо заполнить текстом! Например:" ?>
        <a href='http://randomtextgenerator.com/' title='Генерация текста' target="_blank">такой текст</a>
    <?php endif; ?>

    <?php
    //Функция поиска общих слов в двух массивах
    function getTop3Words($text)
    {
        $long_word = "";
        $top3 = [];
        $array_words = str_word_count($text, 1);

        if (count($array_words) <= 3) {
            return $array_words;
        }

        foreach ($array_words as $key => $word) {
            if (strlen($word) >= strlen($long_word)) {
                $long_word = $word;
//               echo "Max: " . $word . " " . strlen($word) . "<br>";
                array_unshift($top3, $long_word);
            }
        }
        return $top3;
    } ?>
</div>
</body>
</html>

