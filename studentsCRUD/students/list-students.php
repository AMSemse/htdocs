<?php
require_once("../db_config.php");

$query = "SELECT students.studentID, students.firstName, students.lastName, students.dateOfBirth, students.class, classes.className
FROM students
INNER JOIN classes ON students.class = classes.classID";

$results = $db_connection->query($query);


?>
<DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  </head>
  <body>
    <?php include "../nav.php" ?>
    <div class="container">
      <h1 class="">List of Students</h1>
      <a href="createStudent.php" class="btn btn-info">Add a Student</a>
      <table class="table">
        <thead>
          <tr>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Class</th>
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
                <?php echo $result['studentID'] ?>
              </td>
              <td>
                <?php echo $result['firstName'] ?>
              </td>
              <td>
                <?php echo $result['lastName'] ?>
              </td>
              <td>
                <?php echo $result['dateOfBirth'] ?>
              </td>
              <td>
                <?php echo $result['className']; ?>
              </td>
              <td><a href="edit.php?studentID=<?php echo $result['studentID'] ?>"><i class="bi bi-pencil-square"></i></a></td>
              <td><a href="delete.php?studentID=<?php echo $result['studentID'] ?>"><i class="bi bi-trash"></i></a></td>
            </tr>
            <?php
          }
            ?>
        </tbody>
      </table>
    </div>
  </body>
  </html>