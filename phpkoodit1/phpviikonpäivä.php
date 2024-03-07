<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

<?php
  $today = new DateTime();
  $joulu = "24-dec-2023";

  $expire = date_create($joulu);

  //$explore = date_diff($today, $expire);

  if ($expire < $today){
    $jouluMeni = date_diff($expire, $today);
    echo "Joulu meni {jouluMeni->days}";
  } else {
    $daysLeft = date_diff($expire, $today);
    echo "Jouluun on {$daysLeft->days} päivää";
  }
?>
</body>
</html>