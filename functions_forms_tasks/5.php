<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>#</title>
</head>
<body>
<form method="post">
    <div>
        <div>
            <label for="dir">Путь</label>
            <p>
                <input type="text" name="dir" id="dir">
            </p>
            <label for="word">Искомое слово</label>
            <p>
                <input type="text" name="word" id="word">
            </p>
        </div>

        <div class="button">
            <input type="submit" value="Найти">
        </div>
    </div>
</form>
<div class="result">
    <pre>
 <?php print_r(getFiles()); ?>
        </pre>
</div>
</body>
</html>

<?php

function getFiles()
{
    $dir = ".";
    $word = "*";

    if (!empty($_POST['dir']))
        $dir = $_POST['dir'];

    if (!empty($_POST['word']))
        $word = $_POST['word'];

    chdir($dir);

    return glob("*{$word}*");

}

?>

