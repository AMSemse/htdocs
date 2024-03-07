<?php
  session_start();

  $_SESSION["login"] = $_POST["username"];

  if ($_POST["username"] == "Mikko" && ($_POST["password"] == "Miekkakala")) {
    header("Location: http://localhost/phpkoodit1/phpsessions/etusivu.php");
    exit();
  } else {
    header("Location: http://localhost/phpkoodit1/phpsessions/login.html");
    exit();
  }
?>