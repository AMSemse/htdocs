<?php
require_once("../db_config.php");
$studentID = $_GET["studentID"];
$query = "SELECT * FROM students WHERE studentID = :studentID LIMIT 1";
$result = $db_connection->prepare($query);
$result->execute([
  "studentID" => $studentID
]);
$result = $result->fetch();

$classQuery = "SELECT * FROM classes";
$classQueryResult = $db_connection->query($classQuery);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Student</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<?php include "../nav.php" ?>
  <br>
  <div class="container">
    <form method="POST" action="update.php">
      <div class="form-group row">
        <label for="studentID" class="col-sm-2 col-form-label">Student ID</label>
        <div class="col-sm-10">
          <input type="number" readonly class="form-control" id="studentID" name="studentID" value="<?php echo $result['studentID'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="firstName" class="col-sm-2 col-form-label">First Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $result['firstName'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="lastName" class="col-sm-2 col-form-label">Last Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $result['lastName'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="dateOfBirth" class="col-sm-2 col-form-label">Date of Birth</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" value="<?php echo $result['dateOfBirth'] ?>">
        </div>
      </div>
      <div class="form-group row">
          <label for="class" class="col-sm-2 col-form-label">Class</label>
          <div class="col-sm-10">
            <select name="class" id="class">
                <?php
                foreach ($classQueryResult as $e) {
                  if($e['classID'] == $result['class']) {
                    echo "<option selected value='" . $e['classID'] . "'>". $e['className'] ."</option><br>";
                  } else {
                    echo "<option value='" . $e['classID'] . "'>". $e['className'] ."</option><br>";
                  }
                } 
                ?>
            </select>
          </div>
        </div>

      <button type="submit" name="updateStudents" class="btn btn-success">Edit Student</button>
    </form>
  </div>
</body>

</html>