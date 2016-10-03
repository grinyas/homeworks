<?php
/**
 * Created by PhpStorm.
 * User: grinyas
 * Date: 03.10.2016
 * Time: 14:30
 */



if (!empty(isset($_POST['send']) && $_POST['variable'])){
    $variable = $_POST['variable'];

    if(is_numeric($variable)){
         echo "<table  border='1px' cellpadding='5px' align='center'>
    <tr>
        <th>is_int</th>
        <th>is_integer</th>
        <th>is_float</th>
        <th>is_double</th>
    </tr>
    <tr>
        <td>" . (int)$variable . "</td>
        <td>" . (integer)$variable . "</td>
        <td>" . (float)$variable . "</td>
        <td>" . (double)$variable . "</td>
    </tr>
</table>";
    }else{
        switch (strtolower($variable)){
            case "true":
                echo"String or boolean TRUE";
                break;
            case "false":
                echo"String or boolean FALSE";
                break;
            default:
                echo "It is \"string\".";
        }
    }
} else
    echo "NULL";



