<?php
  require_once('../db_config.php');
  
  if (isset($_POST['updateMovie'])) {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $nimi = filter_var($_POST['nimi'], FILTER_UNSAFE_RAW);
    $ohjaaja = filter_var($_POST['ohjaaja'], FILTER_UNSAFE_RAW);
    $paanayttelijat = filter_var($_POST['paanayttelijat'], FILTER_UNSAFE_RAW);
    $kesto = filter_var($_POST['kesto'], FILTER_SANITIZE_NUMBER_INT);
    $hankintapvm = filter_var($_POST['hankintapvm'], FILTER_UNSAFE_RAW);
    $kunto = filter_var($_POST['kunto'], FILTER_UNSAFE_RAW);
    $query = "UPDATE elokuvat SET nimi=:nimi, ohjaaja=:ohjaaja, paanayttelijat=:paanayttelijat, kesto=:kesto, hankintapvm=:hankintapvm, kunto=:kunto WHERE id=:id";

    $result = $db_connection->prepare($query);
    $result->execute([
        "nimi" => $nimi,
        "ohjaaja" => $ohjaaja,
        "paanayttelijat" => $paanayttelijat,
        "kesto" => $kesto,
        "hankintapvm" => $hankintapvm,
        "kunto" => $kunto,
        "id" => $id
    ]);
    $rows = $result->rowCount();
    if ($rows == 1) {
      header('Location: list_movies.php');
    } else {
      $error_message = "Updating record failed";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <br>
  <div class="container">
    <?php
    if (isset($error_message)) {
      ?>
      <div class="alert alert-success">
        <strong>Error!</strong>
        <?php echo $error_message; ?>
      </div>
      <?php
    }
    ?>
  </div>
</body>
</html>