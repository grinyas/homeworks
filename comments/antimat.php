<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link href="../css/bootstrap.css" rel="stylesheet">

    <title>Antimat</title>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <a class="navbar-brand" href="index.php">Comments</a>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="antimat.php">Edit antimat</a></li>
        </ul>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 ">
            <section>
                <form method="post" id="badword">
                    <div class="form-group">
                        <?php
                        require 'common.php';
                        print_r(renderBadWords());
                        ?>
                        <button type="submit" class="btn btn-success" name="add">Add</button>
                        <button type="submit" class="btn btn-success" name="delete">Delete</button>
                    </div>
                </form>
            </section>
        </div>
        <div class="col-md-4 col-md-offset-4">
            <p>
                <label for="word">Add bad word</label>
                <input class="form-control" type="text" name="word" id="word" form="badword">
            </p>
        </div>
    </div>
</div>

</body>
</html>


<?php

switch (!empty($_POST)) {
    case isset($_POST['add']) :
        if (!empty($_POST['word']))
            saveBadWords((array)$_POST['word'], 'a');
        break;
    case isset($_POST['delete']) :
        if (!empty($_POST['check']))
            deleteBadWords($_POST['check']);
        break;
}
?>