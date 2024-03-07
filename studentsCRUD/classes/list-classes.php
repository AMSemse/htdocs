<?php
require_once("../db_config.php");

$query = "SELECT * FROM classes";

$results = $db_connection->query($query);

?>
<DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Classes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  </head>
  <body>
  <?php include "../nav.php" ?>
    <div class="container">
      <h1 class="display-1 text-center">List of Classes</h1>
      <a href="createClass.php" class="btn btn-info">Add a Class</a>
      <table class="table">
        <thead>
          <tr>
            <th>classID</th>
            <th>Class Name</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($results as $result) {
            ?>
            <tr>
              <td>
                <?php echo $result['classID'] ?>
              </td>
              <td>
                <?php echo $result['className'] ?>
              </td>
              <td><a href="edit.php?classID=<?php echo $result['classID'] ?>"><i class="bi bi-pencil-square"></i></a></td>
              <td><a href="delete.php?classID=<?php echo $result['classID'] ?>"><i class="bi bi-trash"></i></a></td>
            </tr>
            <?php
          }
            ?>
        </tbody>
      </table>
    </div>
  </body>
  </html>