<?php
require_once("../db_config.php");

$query = "SELECT * FROM elokuvat";

$results = $db_connection->query($query);

?>
<DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuokkulan Elokuvat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  </head>
  <body>
    <div class="container">
      <h1 class="display-1 text-center">Nuokkulan Elokuvat</h1>
      <a href="create2.php" class="btn btn-info">Lisää elokuva</a>
      <table class="table">
        <thead>
          <tr>
            <th>Elokuva</th>
            <th>Ohjaaja</th>
            <th>Päänäyttelijät</th>
            <th>Kesto min.</th>
            <th>Hankinta PVM</th>
            <th>Kunto</th>
            <th>EDIT</th>
            <th>DELETE</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($results as $result) {
            ?>
            <tr>
              <td>
                <?php echo $result['nimi'] ?>
              </td>
              <td>
                <?php echo $result['ohjaaja'] ?>
              </td>
              <td>
                <?php echo $result['paanayttelijat'] ?>
              </td>
              <td>
                <?php echo $result['kesto'] ?>
              </td>
              <td>
                <?php echo $result['hankintapvm'] ?>
              </td>
              <td>
                <?php echo $result['kunto'] ?>
              </td>
              <td><a href="edit.php?id=<?php echo $result['id'] ?>"><i class="bi bi-pencil-square"></i></a></td>
              <td><a href="delete.php?id=<?php echo $result['id'] ?>"><i class="bi bi-trash"></i></a></td>
            </tr>
            <?php
          }
            ?>
        </tbody>
      </table>
    </div>
  </body>
  </html>