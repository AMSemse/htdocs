<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form>
            <input type="number" name="eka">
            <br>
            <br>
            <input type="number" name="toka">
            <br>
            <br>
            <button>calc</button>
        </form>

<?php 
    if (!isset($_GET["eka"]) && !isset($_GET["toka"])) exit();

    $ekaNum = $_GET["eka"];
    $tokaNum = $_GET["toka"];

    if ($ekaNum % 2 == 0 && $tokaNum % 2 == 0) {
        echo "Molemmat parillisia";
    } else {
        echo "Molemmat eivät olleet parillisia";
    }
?>
    </body>
</html>