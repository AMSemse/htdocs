<?php

require_once("signupConfig.php");
$data = new signupConfig();
$id = $_GET['id'];
$data->setId($id);

if(isset($_POST['edit'])) {
  $data->setFname($_POST['fname']);
  $data->setLname($_POST['lname']);
  $data->setAddr($_POST['address']);

  echo $data->update();
  echo "<script>alert('Data updated successfully');document.location='index.php'</script>";
}

$record = $data->fetchOne();
$val = $record[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-UA-Compatible" content="IE=edge">
  <title>Edit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
  <div class="container">
    <h3 class="display-3 text-center">Edit the information</h3>

    <div>
      <form action="" method="POST">
        <div class="mb-3 mt-3">
          <label for="fname" class="form-label">Firstname</label>
          <input type="text" class="form-control" id="fname" name="fname" placeholder="" value="<?php echo $val['firstName']; ?>">
        </div>
        <div class="mb-3 mt-3">
          <label for="lname" class="form-label">Lastname</label>
          <input type="text" class="form-control" id="lname" name="lname" placeholder="" value="<?php //echo $val['lastName'];?>">
        </div>
        <div class="mb-3 mt-3">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="" value="<?php //echo $val['address'];?>">
        </div>
        <input type="submit" class="btn btn-success" value="Update" name="edit">
      </form>
    </div>
  </div>
</body>

</html>