<?php

use FTP\Connection;

function Conection($db)
{
    $SERVER_NAME = "localhost";
    $USERNAME = "root";
    $PASSWORD = "navaja09";
    $database = $db;

    $conn = mysqli_connect($SERVER_NAME, $USERNAME, $PASSWORD, $database);

    if (!$conn) {
        die("Conexion Fallida: " . mysqli_connect_error());
    }

    return $conn;
}


function savePlatillo($name, $imagen, $precio, $categoria)
{
    $con = Conection("restaurant");
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
