<?php
require_once("../db_config.php");
$classID = $_GET["classID"];
$query = "SELECT * FROM classes WHERE classID = :classID LIMIT 1";
$result = $db_connection->prepare($query);
$result->execute([
  "classID" => $classID
]);
$result = $result->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Class</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<?php include "../nav.php" ?>
  <br>
  <div class="container">
    <form method="POST" action="update.php">
      <div class="form-group row">
        <label for="classID" class="col-sm-2 col-form-label">Class ID</label>
        <div class="col-sm-10">
          <input type="number" readonly class="form-control" id="classID" name="classID" value="<?php echo $result['classID'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="className" class="col-sm-2 col-form-label">Class Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="className" name="className" value="<?php echo $result['className'] ?>">
        </div>
      </div>

      <button type="submit" name="updateClasses" class="btn btn-success">Edit Class</button>
    </form>
  </div>
</body>

</html>