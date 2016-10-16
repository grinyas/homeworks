<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>#4</title>
</head>
<body>
<form method="post">
    <div>
        <div>
            <label for="list">Показать список файлов</label>
            <p>
                <input type="text" name="list" id="list">
            </p>
        </div>

        <div class="button">
            <input type="submit" value="Показать">
        </div>
    </div>
</form>
<div class="result">
    <pre>
 <?php print_r(getListFiles()); ?>
        </pre>
</div>
</body>
</html>

<?php

function getListFiles()
{

    $path = "";

    if (!empty($_POST['list']))
        $path = $_POST['list'];

    return glob($path . '*');

}

?>

