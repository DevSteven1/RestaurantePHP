<?php

/* 
    Obtencion de datos para el llenado de la tabla
*/
$table = "tb_categorias";
$datos = getAllData($table);
$colums = getColumsName("$table");
$data = getAllData("$table");

//Guardado Categorias
/* Se verifica si se hizo click en el boton y se hace el envio de datos*/
if (isset($_POST['GuardarCategoria'])) {
    /*Se hace la obtencion de los datos y se usa el metodo de guardado*/
    $id = $_POST['ID_Categoria'];
    $nombre = $_POST['Nombre_Categoria'];
    $resultSave = saveCategorias($id, $nombre);
    switch ($resultSave) {
        case 0:
            echo '<script>ErrorGuardado();</script>';
            break;
        case 1:
            echo '<script>GuardadoExitoso();</script>';
            break;
    }
}

//Modificar Categorias
if (isset($_POST['EditarCategorias'])) {
    $id = $_POST['ID_Categoria_Modificar'];
    $nombre = $_POST['Nombre_Categoria_Modificar'];
    $resultSave = modifyCatgorias($id, $nombre);
    switch ($resultSave) {
        case 0:
            echo '<script>ErrorModificado();</script>';
            break;
        case 1:
            echo '<script>ModificadoExitoso();</script>';
            break;
    }
}

include("DeleteRegistros.php");
