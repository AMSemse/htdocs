<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="GET">
            <input type="number" name="number1">
            <input type="number" name="number2">
            <button>calc</button>
        </form>

<?php
    if (!isset($_GET["number1"]) && !isset($_GET["number1"])) exit();
    

    $num1 = $_GET["number1"];
    $num2 = $_GET["number2"];

    echo $num1 % $num2;
?>
    </body>
</html>