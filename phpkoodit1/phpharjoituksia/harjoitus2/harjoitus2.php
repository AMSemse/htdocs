<?php
    if (!isset($_POST["number"])) exit();

    $num = $_POST["number"];

    for ($i = 0; $i <= 10; $i++) {
        echo $i * $num . "  ";
    }
?>