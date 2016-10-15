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
        <textarea type="text" name="text" id="text" cols="50" rows="10"></textarea>
        <p><input type="submit" value="Форматировать"></p>
    </div>
    <div class="result">
        <p>Форматированый текст:</p>
        <pre>
        <?php getFormatedText() ?>
            </pre>
    </div>
</form>
</body>
</html>

<?php

function getFormatedText()
{
    if (empty($_POST['text'])) die("Пусто!");

    $text =$_POST['text'];
    $text = array_reverse(explode(". ",$text));
    $text = str_replace(".", "", $text);
    print_r(implode(". ", $text) . ".");
}
?>