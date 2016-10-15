<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>№9</title>
</head>
<body>

<form method="post">
    <label for="string">Введите строку:</label>
    <input type="text" name="string" id="string">
    <input type="submit" value="Перевернуть">
    <div class="result">
        <?php (empty($_POST['string'])) ? die("Пусто!") : print_r(strrev($_POST['string']))?>
    </div>
</form>


</body>
</html>

