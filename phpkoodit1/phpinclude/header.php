<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <h1>Esimerkkiotsikko (h1)</h1>
  <p>tekstikappale</p>
  <?php
    date_default_timezone_set('Europe/Helsinki');
    echo "Tänään on " . date("d-m-Y");
  ?>
</body>
</html>