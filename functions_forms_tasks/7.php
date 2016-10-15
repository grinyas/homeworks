<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Title</title>
</head>
<body>
<h1>Гостевая книга</h1>
<div id="guest_book">

    <div id="guest_book_head">
        <p>Коментарии</p>
    </div>

    <div id="comments">
        <table>
            <?php $comments = getComments() ?>
            <?php foreach ($comments as $comment): ?>
                <tr>
                    <td class="comment_name"><strong><?= $comment[0]?></strong></td>
                    <td class="comment_email"><strong><?= $comment[1]?></strong></td>
                    <td class="comment_time"><strong><?= $comment[2] ?></strong></td>
                </tr>
                <tr>
                    <td colspan="3" class="comment_message"><?= $comment[3] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <form method="post" id="comments">
        <div id="guest_book_fields">
            <div class="guest_book_field">
                <label for="name">Имя:</label>
                <input type="text" name="name" id="name" required>
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="guest_book_field">
                <label for="message">Сообщение:</label>
                <textarea name="message" id="message" cols="70" required></textarea>
                <input type="submit" value="Отправить">
            </div>
    </form>

</div>

</body>
</html>
<?php

if (empty($_POST['message']))
    exit;
else
    saveComment();

function saveComment()
{
    $CWD = getcwd();
    $COMMENTS_DIR = 'comments/';
    $COMMENTS_FILE = 'comment';

    $name = "NoName";
    $email = "";
    $message = "";

    if (!empty($_POST['message'])) {
        $message = $_POST['message'];
    }

    if (!empty($_POST['name'])) {
        $name = trim($_POST['name']);
    }

    if (!empty($_POST['email'])) {
        $email = trim($_POST['email']);
    }

    if (!file_exists($COMMENTS_DIR)) {
        mkdir($CWD . "/" . $COMMENTS_DIR);
    }

    $handler = fopen($COMMENTS_DIR .
        $COMMENTS_FILE .
        "." . time(), "a");

    fputs($handler, $name . "\n");
    fputs($handler, $email . "\n");
    fputs($handler, date("F j, Y, g:i a") . "\n");
    fputs($handler, $message . "\n");

    fclose($handler);
}

function getComments()
{
    $CWD = getcwd();
    $COMMENTS_DIR = 'comments/';
    $COMMENTS_FILE = 'comment';
    $arr_comments = array();

    if (!file_exists($CWD . "/" . $COMMENTS_DIR)) {
        exit;
    } else {
        chdir($COMMENTS_DIR);
    }

    $files = glob("$COMMENTS_FILE.*");

    for ($i = 0; $i < sizeof($files); $i++) {
        $arr_comments[] = file($files[$i], FILE_IGNORE_NEW_LINES);
    }

    chdir($CWD);

    return array_reverse($arr_comments);
}

?>
