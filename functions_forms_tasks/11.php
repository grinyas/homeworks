<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>№11</title>
</head>
<body>

<form method="post">
    <div>
        <p><label for="text">Введите текст:</label></p>
        <textarea type="text" name="text" id="text" cols="50" rows="10" >а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый.а ларчик просто открывался. а там хоть трава не расти</textarea>
        <p><input type="submit" value="Форматировать"></p>
    </div>
    <div class="result">
        <p>Форматированый текст:</p>

        <?php getFormatedText() ?>

    </div>
</form>
</body>
</html>
<?php

function getFormatedText()
{
    if (empty($_POST['text'])) die("Пусто!");

    $text = $_POST['text'];
    $text = mb_split('\.', $text);

    array_walk($text, function (&$value) {
        $firstL = mb_strtoupper(substr($value, 0, 2), "utf-8");
        $value[1] = $firstL[1];
    });


    $text = str_replace(".", "", $text);
    print_r(implode(". ", $text) . ".");
}

?>