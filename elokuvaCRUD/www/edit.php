<?php
require_once("../db_config.php");
$id = $_GET["id"];
$query = "SELECT * FROM elokuvat WHERE id = :id LIMIT 1";
$result = $db_connection->prepare($query);
$result->execute([
  "id" => $id
]);
$result = $result->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Muokkaa elokuvaa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <br>
  <div class="container">
    <form method="POST" action="update.php">
      <div class="form-group row">
        <label for="id" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
          <input type="number" readonly class="form-control" id="id" name="id" value="<?php echo $result['id'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="nimi" class="col-sm-2 col-form-label">Nimi</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nimi" name="nimi" value="<?php echo $result['nimi'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="ohjaaja" class="col-sm-2 col-form-label">Ohjaaja</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="ohjaaja" name="ohjaaja" value="<?php echo $result['ohjaaja'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="paanayttelijat" class="col-sm-2 col-form-label">Päänäyttelijät</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="paanayttelijat" name="paanayttelijat" value="<?php echo $result['paanayttelijat'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="kesto" class="col-sm-2 col-form-label">Kesto min.</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="kesto" name="kesto" value="<?php echo $result['kesto'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="hankintapvm" class="col-sm-2 col-form-label">Hankinta PVM</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="hankintapvm" name="hankintapvm" value="<?php echo $result['hankintapvm'] ?>">
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

      <button type="submit" name="updateMovie" class="btn btn-success">Muokkaa Elokuvaa</button>
    </form>
  </div>
</body>

</html>