<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Title</title>
</head>
<body>

</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>#7</title>
</head>
<body>
<h1>Гостевая книга</h1>


<div id="guest_book">

    <div id="guest_book_head">
        <p>Коментарии</p>
    </div>

    <div id="comments">
        <table border="1px solid">
            <?php $comments = getComments() ?>
            <?php foreach ($comments as $comment):
                print_r($comment) ?>
            <?php endforeach; ?>
        </table>
    </div>
    <form method="post">
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
                <input type="submit">
            </div>
    </form>
</div>
</body>
</html>

<?php

function getComments()
{
    static $comment_id = 0;
    $comments = array();
    if (!empty($_POST['message'])) {

        $comments[$comment_id] = "<tr>
                <tr>
                    <td rowspan=\"2\" width=\"20px\">1</td>
                    <td>Name1</td>
                     <td>Time</td>
                </tr>
            <tr>
                <td colspan=\"2\">" . $_POST['message'] . "</td>
            </tr>

            <tr>";
    }
    var_dump($comment_id);
    return $comments;
}


?>