<?php 
require_once('../db_config.php');

if (isset($_POST['addClass'])) {
  $className = filter_var($_POST['className'], FILTER_UNSAFE_RAW);

  $query = "INSERT INTO classes (className)
            VALUES  (:className)";
  $result = $db_connection->prepare($query);
  $result->execute([
    "className" => $className
  ]);
  $rows = $result->rowCount();
  if ($rows == 1) {
    header ("Location: list-classes.php");
  } else {
    $error_message = "Class creation failed";
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
  <?php include "../nav.php" ?>
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
          <label for="className" class="col-sm-2 col-form-label">Class Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="className" name="className">
          </div>
        </div>

        <button type="submit" name="addClass" class="btn btn-success">Add a Class</button>
      </form>
    </div>
  </body>
  </html>