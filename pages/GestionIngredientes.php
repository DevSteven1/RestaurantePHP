<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Ingredientes</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <?php
    include("../includes/HomeAdministradores.php");
    include("../assets/Conection.php");
    include("../includes/GenericTables.php");

    //Conexion con la DB
    $colums = getColumsName("tb_ingredientes");
    $data = getAllData("tb_ingredientes");

    //Conexion Temporal con JSON
    $JSON = file_get_contents('../data/JsonIngredientes.json');
    $ArrayJSON = json_decode($JSON, true);
    $columnas = $ArrayJSON['columnas'];
    $contenido = $ArrayJSON['contenido'];
    ?>

    <div class="p-4 ml-20">
        <h2 class="font-serif text-center col-span-12  mt-3 text-5xl">Gestion de Ingredientes</h2>
        <div class="min-w-[200px] p-4  border border-gray-200 rounded-lg dark:bg-white-800 mt-[3%] -300 shadow-xl">
            <div class="grid grid-cols-12 mb-3 mx-auto">
                <div class="relative w-full col-span-10">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <span class="material-symbols-outlined text-gray-500">
                            restaurant
                        </span>
                    </div>
                    <input id="filtro" type="text" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  " required />
                    <button type="button" class="absolute inset-y-0 end-0 flex items-center pe-3">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7v3a5.006 5.006 0 0 1-5 5H6a5.006 5.006 0 0 1-5-5V7m7 9v3m-3 0h6M7 1h2a3 3 0 0 1 3 3v5a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V4a3 3 0 0 1 3-3Z" />
                        </svg>
                    </button>
                </div>
                <button type="submit" data-modal-target="new-modal" data-modal-toggle="new-modal" class="truncate col-span-2 text-center py-2.5 px-3 ms-1 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-600  focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-600">
                    Nuevo +
                </button>
            </div>
            <div class="overflow-auto max-h-[400px]">
                <div class="grid grid-cols-12 mb-4">
                    <?php Tablas($columnas, $contenido , false , "tb_ingredientes") ?>
                </div>
            </div>

        </div>


    </div>

    <!-- Modal de Modificar Ingrediente -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Contenido del modal -->
            <div class="relative bg-white rounded-lg shadow animate__animated animate__fadeIn transform transition-all duration-1000 ease-linear">
                <!-- Encabezado del modal -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Modificar Ingrediente
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Cerrar modal</span>
                    </button>
                </div>
                <!-- Cuerpo del modal -->
                <form class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900"> &nbsp;ID</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="ID Ingrediente" readonly>
                        </div>
                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900"> &nbsp;Nombre</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Ingrediente" required="">
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-3">
                        <button type="submit" class="col-span-2 end text-white items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Modificar
                        </button>
                        <button type="submit" class="col-span-2 col-start-3 text-white items-center bg-red-500 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Eliminar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal de Registrar Ingrediente -->
    <div id="new-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Contenido del modal -->
            <div class="relative bg-white rounded-lg shadow  animate__animated animate__fadeIn transform transition-all duration-1000 ease-linear">
                <!-- Encabezado del modal -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Registrar Ingrediente
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="new-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Cerrar modal</span>
                    </button>
                </div>
                <!-- Cuerpo del modal -->
                <form class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900"> &nbsp;Nombre</label>
                            <input type="text" name="NombrePlato" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Nombre del ingrediente" required="">
                        </div>
                    </div>
                    <div class="flex justify-center items-center h-full">
                        <button type="submit" class="w-56 text-white items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Agregar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<script src="../public/js/TablesFilter.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="../public/js/menujs.js"></script>
</html>