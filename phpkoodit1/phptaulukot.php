<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

<?php
  $taulukko = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

  foreach ($taulukko as $num) {
    echo $num . "<br>";
  }

  echo "<br><br><br>";

  //$newArray = count($taulukko);
  $reversedArray = array_reverse($taulukko);
  $reversedArrayLength = count($reversedArray);

  //print_r ($reversedArray);
  for ($i = 0; $i < $reversedArrayLength; $i++) {
    if ($reversedArray[$i] % 2 == 0) {
      echo $reversedArray[$i] . "<br>";
    }
  }
?>
</body>
</html>