<?php
function setUpGame()
{
    if (!isset($_SESSION["word"])) {
        $words = file("sanat.txt");
        $word = rtrim(strtoupper($words[array_rand($words)]));
        $shuffeldWord = str_shuffle($word);
        $_SESSION["word"] = $word;
        $_SESSION["shuffledWord"] = $shuffeldWord;
        //$_SESSION["guess"] = $_POST["guess"]; 
    }
    echo "<h1 class='text-center'>". $_SESSION["shuffledWord"] ."</h1>";
}
if (isset($_POST["guess"])) {
    if (strtoupper($_POST["guess"]) != $_SESSION["word"]) {
        include ("youLost.php");
        unset($_SESSION["word"]);
    } else if (strtoupper($_POST["guess"]) == $_SESSION["word"]) {
        include ("youWon.php");
        unset($_SESSION["word"]);
    }
}
?>