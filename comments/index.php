<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../css/bootstrap.css" rel="stylesheet">

    <title>Comments</title>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <a class="navbar-brand" href="#">Comments</a>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="antimat.php">Edit antimat</a></li>
        </ul>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <section>
                <form action="comment.php" method="post">
                    <div class="form-group">
                        <p>
                            <label for="username">Username</label>
                            <input class="form-control" type="text" name="username" id="username" required="true">
                        </p>
                        <p>
                            <label for="email">E-mail</label>
                            <input class="form-control" type="email" name="email" id="email" required="true">
                        </p>
                        <p>
                            <label for="comment">Comment body</label>
                            <textarea class="form-control" id="comment" name="comment" rows="8" cols="40"
                                      required="true"></textarea>
                        </p>
                        <button type="submit" class="btn btn-success">Send</button>
                    </div>
                </form>
            </section>
        </div>

        <div class="col-md-6 pre-scrollable">
            <section>
                <?php
                require 'common.php';
                print_r(renderComments());
                ?>
            </section>
        </div>
    </div>
</div>
</body>
</html>