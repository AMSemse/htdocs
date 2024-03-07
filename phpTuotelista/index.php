<?php 
    $cars = array(
        array(1, "Volvo", 22, 18),
        array(2, "BMW", 15, 13),
        array(3, "Saab", 5, 2),
        array(4, "Land Rower", 17, 15)
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Table</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-primary">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white">Selaa autoja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white">Lisää uusi auto</a>
                </li>
            </ul>
        </div>
    </nav>
    <table class="table">
        <tr class="primary">
            <th>AutoID</th>
            <th>Auto</th>
            <th>Varastossa</th>
            <th>Myyty</th>
            <th>Muokkaa</th>
            <th>Poista</th>
        </tr>
        <?php 
        foreach ($cars as $k) {
            echo "<tr>";
            foreach ($k as $i) {
                echo "<td>" . $i . "</td>";
            }
            echo '<td><a href="edit_car.php?id='. $k[0] .'"><i class="bi bi-pencil-square"></i></a></td>';
            echo '<td><a href="delete_car.php?id='. $k[0] .'"><i class="bi bi-trash"></i></a></td>';
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>