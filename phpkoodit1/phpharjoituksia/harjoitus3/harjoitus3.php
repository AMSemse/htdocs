<?php
    if (!isset($_POST["alaraja"]) && !isset($_POST["ylaraja"])) exit();

    $ala = $_POST["alaraja"];
    $yla = $_POST["ylaraja"];

    $range = range($ala, $yla);
    $counter = 1;

    foreach ($range as $value) {
        if ($counter++ % 10 == 0) {
            echo $value . "<br>";
        } else {
            echo $value . " ";
        }
    }
?>