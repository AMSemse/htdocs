<?php 
require_once('../db_config.php');

if (isset($_POST['lisaaElokuva'])) {
  $nimi = filter_var($_POST['nimi'], FILTER_UNSAFE_RAW);
  $ohjaaja = filter_var($_POST['ohjaaja'], FILTER_UNSAFE_RAW);
  $paanayttelijat = filter_var($_POST['paanayttelijat'], FILTER_UNSAFE_RAW);
  $kesto = filter_var($_POST['kesto'], FILTER_SANITIZE_NUMBER_INT);
  $hankintapvm = filter_var($_POST['hankintapvm'], FILTER_UNSAFE_RAW);
  $kunto = filter_var($_POST['kunto'], FILTER_UNSAFE_RAW);
  $query = "INSERT INTO elokuvat (nimi, ohjaaja, paanayttelijat, kesto, hankintapvm, kunto)
            VALUES  (:nimi, :ohjaaja, :paanayttelijat, :kesto, :hankintapvm, :kunto)";
  $result = $db_connection->prepare($query);
  $result->execute([
    "nimi" => $nimi,
    "ohjaaja" => $ohjaaja,
    "paanayttelijat" => $paanayttelijat,
    "kesto" => $kesto,
    "hankintapvm" => $hankintapvm,
    "kunto" => $kunto
  ]);
  $rows = $result->rowCount();
  if ($rows == 1) {
    header ("Location: list_movies.php");
  } else {
    $error_message = "Record creation failed";
  }
}
?>

<DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lisää elokuva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  </head>
  <body>
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
      <form method="POST" action="">
        <div class="form-group row">
          <label for="nimi" class="col-sm-2 col-form-label">Elokuvan Nimi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nimi" name="nimi">
          </div>
        </div>
        <div class="form-group row">
          <label for="ohjaaja" class="col-sm-2 col-form-label">Ohjaaja</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="ohjaaja" name="ohjaaja">
          </div>
        </div>
        <div class="form-group row">
          <label for="paanayttelijat" class="col-sm-2 col-form-label">Päänäyttelijät</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="paanayttelijat" name="paanayttelijat">
          </div>
        </div>
        <div class="form-group row">
          <label for="kesto" class="col-sm-2 col-form-label">Kesto min.</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="kesto" name="kesto">
          </div>
        </div>
        <div class="form-group row">
          <label for="hankintapvm" class="col-sm-2 col-form-label">Hankinta PVM</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="hankintapvm" name="hankintapvm">
          </div>
        </div>
        <div class="form-group row">
          <label for="kunto" class="col-sm-2 col-form-label">Kunto T1 - K5</label>
          <div class="col-sm-10">
            <select name="kunto" id="kunto">
                <?php
                foreach (kunto::cases() as $arvo) {
                    echo "<option value='" . $arvo->name . "'>". $arvo->name ."</option><br>";
                } 
                ?>
            </select>
          </div>
        </div>

        <button type="submit" name="lisaaElokuva" class="btn btn-success">Lisää Elokuva</button>
      </form>
    </div>
  </body>
  </html>