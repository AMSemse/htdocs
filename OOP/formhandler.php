<?php
include 'product.php';

if (isset($_POST['hinta'])) {
    $table = new Product($_POST['nimi'], $_POST['valmistaja'], $_POST['hinta'], $_POST['kuvaus']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <h1>Tuotteen tiedot</h1>
    <table>
        <tr>
            <td>Tuotteen nimi</td>
            <td><?php echo $table->getNimi() ?></td>
        </tr>
        <tr>
            <td>Tuotteen valmistaja</td>
            <td><?php echo $table->getValmistaja() ?></td>
        </tr>
        <tr>
            <td>Tuotteen hinta (alv 0%)</td>
            <td><?php echo $table->getHinta() ?></td>
        </tr>
        <tr>
            <td>Tuotteen verollinen hinta</td>
            <td><?php echo $table->get_alvhinta(24) ?></td>
        </tr>
        <tr>
            <td>Tuotteen kuvaus</td>
            <td><?php echo $table->getKuvaus() ?></td>
        </tr>
    </table>
</body>
</html>