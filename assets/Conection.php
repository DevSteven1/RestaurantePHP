<?php

use FTP\Connection;

include("../assets/ConnectionIgnore.php");

function saveCategorias($id, $nombre)
{
    $connection = getConection();
    //Importante los "?" ya que son los paramentros que se agregaran mas adelante
    $sql = "CALL GuardadoCategorias(? , ?)";
    //Se prepara la consulta (en este caso el procedimiento)
    $stmt = $connection->prepare($sql);

    //Se verifica si el procedimiento se preparo correctamente
    if ($stmt === false) {
        die("Error al preparar la consulta: " . $connection->error);
    }

    //Si el procedimiento cargo bien sigue la Vinculacion de los parametros
    // "is" son los tipos de datos en orden que se usaran en este caso es INT y STRING
    $stmt->bind_param("is", $id, $nombre);

    // Ejecutar la consulta
    $result = false;
    try {
        $stmt->execute();
        $result = true;
    } catch (Exception) {
        $result = false;
    }
    return $result;
}

function modifyCatgorias($id, $nombre)
{
    $connection = getConection();
    $sql = "CALL EditCategoria(? , ?)";
    $stm = $connection->prepare($sql);
    if ($stm === false) {
        die("Error al preparar la consulta: " . $connection->error);
    }

    $stm->bind_param("is", $id, $nombre);

    $result = false;
    try {
        $stm->execute();
        $result = true; 
    } catch (Exception) {       
        $result = false;
    }

    return $result;
}

function getAllData($tableName)
{
    $connection = getConection();
    $query = "SELECT * FROM $tableName";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    mysqli_close($connection);
    return $data;
}

function getColumsName($tableName)
{
    $connection = getConection();
    // Realizar una consulta para obtener los nombres de las columnas
    $query = "SHOW COLUMNS FROM $tableName";
    $result = mysqli_query($connection, $query);

    // Obtener los nombres de las columnas
    $columnNames = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $columnNames[] = $row['Field'];
    }
    // Cerrar la conexión a la base de datos
    mysqli_close($connection);

    return $columnNames;
}
