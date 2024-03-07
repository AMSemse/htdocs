<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="GET">
            <input type="number" name="number">
            <button>Calc</button>
        </form>

<?php
    $randomNum = rand(1,10);
    $inputNum = $_GET['number'];

    echo $inputNum + $randomNum;
    //echo $randomNum;

?>
    </body>
</html>