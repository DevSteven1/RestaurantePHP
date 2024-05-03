<?php

use FTP\Connection;

include("../assets/ConnectionIgnore.php");


function savePlatillo($name, $imagen, $precio, $categoria)
{
    $con = Conection();
    $query = "INSERT INTO tb_producto (`NOMBRE`, `IMAGEN`, `PRECIO`, `Tb_Categorias_ID`) VALUES ( '$name', '$imagen' , '$precio' , '$categoria')";
    $result = mysqli_query($con, $query);
    return $result;
}


function getAllData($tableName, $connection)
{
    $query = "SELECT * FROM $tableName";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    mysqli_close($connection);
    return $data;
}
