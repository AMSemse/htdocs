<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="GET">
            <input type="text" name="text">
            <button>How long?</button>
        </form>

<?php
    $textCount = $_GET["text"];
    echo strlen($textCount);
?>
    </body>
</html>