<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    include("../assets/Conection.php");
    $connection = Conection("restaurant");
    echo getAllData("tb_producto", $connection);
    ?>

</body>

</html>