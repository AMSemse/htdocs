<?php

if (isset($_POST['save'])) {
  require_once("signupConfig.php");
  $sc = new signupConfig();

  $sc->setFname($_POST['fname']);
  $sc->setLname($_POST['lname']);
  $sc->setAddr($_POST['address']);

  $sc->insertData();
}


?>