<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-UA-Compatible" content="IE=edge">
  <title>Simple registration form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
  <div class="container-fluid">
    <h3 class="display-3 text-center">Fill out the information</h3>

    <div>
      <form action="signupProcess.php" method="POST">
        <div class="mb-3 mt-3">
          <label for="fname" class="form-label">Firstname</label>
          <input type="text" class="form-control" id="fname" name="fname" placeholder="Your firstname">
        </div>
        <div class="mb-3 mt-3">
          <label for="lname" class="form-label">Lastname</label>
          <input type="text" class="form-control" id="lname" name="lname" placeholder="Your lastname">
        </div>
        <div class="mb-3 mt-3">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="Your address">
        </div>
        <input type="submit" class="btn btn-primary" value="Save" name="save">
      </form>
    </div>
  </div>
</body>

</html>