<?php
    //print_r($_POST["song"]);
    $count = 0;
    foreach ($_POST["song1"] as $key => $value) {
        echo $value ."<br>";
        $count++;
    }
    foreach ($_POST["song2"] as $key => $value) {
        echo $value ."<br>";
        $count += 1.25;
    }
    echo "<br><br>" . $count . "€"; 
?>