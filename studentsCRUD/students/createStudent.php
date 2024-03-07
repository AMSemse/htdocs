<?php 
require_once('../db_config.php');

if (isset($_POST['addStudent'])) {
  $firstName = filter_var($_POST['firstName'], FILTER_UNSAFE_RAW);
  $lastName = filter_var($_POST['lastName'], FILTER_UNSAFE_RAW);
  $dateOfBirth = filter_var($_POST['dateOfBirth'], FILTER_UNSAFE_RAW);
  $class = filter_var($_POST['class'], FILTER_SANITIZE_NUMBER_INT);

  $query = "INSERT INTO students (firstName, lastName, dateOfBirth, class)
            VALUES  (:firstName, :lastName, :dateOfBirth, :class)";
  $result = $db_connection->prepare($query);
  $result->execute([
    "firstName" => $firstName,
    "lastName" => $lastName,
    "dateOfBirth" => $dateOfBirth,
    "class" => $class
  ]);
  $rows = $result->rowCount();
  if ($rows == 1) {
    header ("Location: list-students.php");
  } else {
    $error_message = "Student creation failed";
  }
}

$classQuery = "SELECT * FROM classes";

$classQueryResult = $db_connection->query($classQuery);
?>

<DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Student</title>
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
          <label for="firstName" class="col-sm-2 col-form-label">First Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="firstName" name="firstName">
          </div>
        </div>
        <div class="form-group row">
          <label for="lastName" class="col-sm-2 col-form-label">Last Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="lastName" name="lastName">
          </div>
        </div>
        <div class="form-group row">
          <label for="dateOfBirth" class="col-sm-2 col-form-label">Date of Birth</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth">
          </div>
        </div>
        <div class="form-group row">
          <label for="class" class="col-sm-2 col-form-label">Class</label>
          <div class="col-sm-10">
            <select name="class" id="class">
                <?php
                foreach ($classQueryResult as $e) {
                    echo "<option value='" . $e['classID'] . "'>". $e['className'] ."</option><br>";
                } 
                ?>
            </select>
          </div>
        </div>

        <button type="submit" name="addStudent" class="btn btn-success">Add Student</button>
      </form>
    </div>
  </body>
  </html>