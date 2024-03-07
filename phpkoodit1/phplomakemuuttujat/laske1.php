<?php
  if (!isset($_POST["hinta"]) && !isset($_POST["vero"])) exit();

  $hinta = $_POST["hinta"];
  $verokanta = $_POST["vero"];

  $verokantaPercent = (($verokanta)/100) + 1;

  $verollinenHinta = $hinta * $verokantaPercent;

  echo $hinta . "<br>";
  echo $verokanta . "<br>";
  echo $verollinenHinta;
?>