<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Операторы сравнения</title>
</head>
<body>
    <h1>Операторы сравнения</h1>

    <div class="form_compare">
    <form method="post" >
        <div class="input_compare">
             <label name="var1" for="var1">Variable 1</label>
                  <input type="text" name="var1" id="var1"><br>
        </div>
        <div class="input_compare">
            <label name="var1" for="var2">Variable 2</label>
                <input type="text" name="var2" id="var2"><br>

            <div class="submit_compare">
                <input type="submit"  value="Compare">
            </div>
        </div>
    </form>
    </div>

    <div class="result_compare">
    <?php
    if(!empty($_POST['var1']) && !empty($_POST['var2'])){
        $var1 = $_POST['var1'];
        $var2 = $_POST['var2'];

        if($var1 == $var2)
            echo "Variable 1 EQ Variable 2";
        elseif ($var1 < $var2)
            echo "Variable 1 LT Variable 2";
        elseif ($var1 > $var2)
            echo "Variable 1 GT Variable 2";
        }
    ?>
    </div>
</body>
</html>
