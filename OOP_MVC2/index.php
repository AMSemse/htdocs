<?php

require_once("signupConfig.php");
$data = new signupConfig();
$all = $data->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-UA-Compatible" content="IE=edge">
  <title>All Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
  <div class="container">

    <h2 class="display-2 text-center">List of all records</h2>
    <div>
      <a class="btn btn-success" href="signup.php">Add New</a>
    </div>
    <table class="table text-center">
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
      <?php
      foreach($all as $d => $val) {
        ?>
        <tr>
          <td><?=$val['firstName']; ?></td>
          <td><?=$val['lastName']; ?></td>
          <td><?=$val['address']; ?></td>
          <td>
            <a class="btn btn-primary" href="edit.php?id=<?=$val['id']; ?>">Edit</a>
            <a class="btn btn-danger" href="delete.php?id=<?=$val['id']; ?>&req=delete">Delete</a>
          </td>
        </tr>
      <?php
      }
      ?>
    </table>
    
  </div>

</body>
</html>