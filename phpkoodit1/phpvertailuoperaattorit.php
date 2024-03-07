<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form method="GET">
            <input type="number" name="eka">
            <button>calc</button> 
        </form>
        <br>

<?php
    if (!isset($_GET["eka"])) exit();

    $ekaluku = $_GET["eka"];

    if ($ekaluku >= 5) {
        echo "Luku oli suurempi!" . "<br>";
    } else {
        echo "Luku oli pienempi!" . "<br>";
    }

    if ($ekaluku > 5) {
        echo "isompi";
    } elseif ($ekaluku < 5) {
        echo "pienempi";
    } else {
        echo "viisi";
    }
?>

    </body>
</html>