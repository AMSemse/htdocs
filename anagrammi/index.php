<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Anagrammi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <?php 
    include "menu.php";
    include "functions.php";
    ?>
    <div class="container">
    <?php 
    setUpGame();
    ?>
    </div>
    <div class="container mt-3 text-center">
        <form method="POST">
            <div>
                <label for="guess" class="form-label"></label>
                <input type="text" name="guess" class="form-label">
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="GUESS">
            </div>
        </form>
    </div>

</body>