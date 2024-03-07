<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form method="GET">
            <input type="number" name="year">
            <button>Karkausvuosi?</button>
        </form>
    
<?php
    if (!isset($_GET["year"])) exit();
    $vuosi = $_GET["year"];

    if ($vuosi % 400 == 0) {
        echo $vuosi . " on karkausvuosi";
    } elseif ($vuosi % 100 == 0) {
        echo $vuosi . " ei ole karkausvuosi";
    } elseif ($vuosi % 4 == 0) {
        echo $vuosi . " on karkausvuosi";
    } else {
        echo $vuosi . " ei ole karkausvuosi";
    }
?>
    </body>
</html>