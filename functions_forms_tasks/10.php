<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>№9</title>
</head>
<body>

<form method="post">
    <div>
        <p><label for="text">Введите текст:</label></p>
        <textarea type="text" name="text" id="text" cols="50" rows="10"></textarea>
        <p><input type="submit" value="Подсчитать"></p>
    </div>
    <div class="result">
        <p>Уникльные слова в тексте</p>
        <pre>
        <?php (empty($_POST['text'])) ? die("Пусто!") : print_r(array_unique(
                                                             str_word_count($_POST['text'], 1)
                                                             )
                                                         ) ?>
            </pre>
    </div>
</form>
</body>
</html>

<?php

function getUniqWords()
{

}


?>