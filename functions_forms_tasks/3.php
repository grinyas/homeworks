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

    <details>
        <summary>Оригинальный текст</summary>
        <p><?= getOriginalText() ?> </p>
    </details>
    <details>
        <summary>Форматированый текст</summary>
        <pre><?php print_r(getFormatedText()) ?> </pre>
    </details>

</div>
</body>
</html>

<?php

function getOriginalText()
{
    $FILE_NAME = "text.txt";
    $content = "Файл пустой";

    if (!file_exists($FILE_NAME))
        exit;

    $handle = fopen($FILE_NAME, "r");

    if (!empty(filesize($FILE_NAME)))
        $content = fread($handle, filesize($FILE_NAME));

    return $content;
}

function getFormatedText()
{

    if (empty($_POST['length'])) die("Поле не заполнено!");
    $length = $_POST['length'];
    $text = str_word_count(getOriginalText(), 1);

    $words = array_filter($text, function ($value) use ($length) {
        return (mb_strlen($value) <= $length);
    });
    return $words;
}

?>

