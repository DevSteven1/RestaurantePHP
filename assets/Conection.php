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

function getAllCategories($connection)
{
    $query = "SELECT * FROM tb_categorias";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        throw new Exception("Error al obtener los datos: " . mysqli_error($connection));
    }

    $data = array();

    // Recorrer los resultados y almacenarlos en el arreglo
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    return json_encode($data);
}

function savePlatillo($name, $imagen, $precio, $categoria)
{
}


function getAllData($tableName, $connection)
{
    $query = "SELECT * FROM $tableName";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        throw new Exception("Error al obtener los datos: " . mysqli_error($connection));
    }

    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    mysqli_close($connection);
    return json_encode($data);
}
