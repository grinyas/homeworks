<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>3</title>
</head>
<body>
<form method="post">
    <div>
        <div class="txtarea">
            <label for="length">Длина слов которые необходимо удалить</label>
            <p>
                <input type="text" name="length" id="length">
            </p>
        </div>

        <div class="button">
            <input type="submit" value="Удалить">
        </div>
    </div>
</form>
<div class="result">
    <?php
    $FILE_NAME = "text.txt";

    if (file_exists($FILE_NAME)):
        $handle = fopen($FILE_NAME, "r");
        if (!empty(filesize($FILE_NAME)))
            $content = fread($handle, filesize($FILE_NAME));
            ?>
    <details>
        <summary>Оригинальный текст</summary>
        <p><?= $content ?> </p>
    </details>
            <?php $content;
        else:
            echo "File empty!<br>";
    endif;


            ?>

</div>
</body>
</html>

