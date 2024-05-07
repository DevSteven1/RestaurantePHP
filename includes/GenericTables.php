<script src="https://cdn.tailwindcss.com"></script>

<?php
include("../assets/Conection.php");

$datos = getAllData("tb_categorias");

$colums = getColumsName("tb_categorias");
$data = getAllData("tb_categorias");
function Tablas(array $columns, array $data)
{
?>
    <table class="table-auto col-span-12 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 overflow-y-scroll">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <?php foreach ($columns as $column) { ?>
                    <th scope="col" class="px-6 py-3">
                        <?php echo $column; ?>
                    </th>
                <?php } ?>
                <th scope="col" class="px-6 py-3">Funciones</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($data as $row) { ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <?php foreach ($row as $cell) { ?>
                        <td class="px-6 py-4">
                            <?php echo $cell; ?>
                        </td>
                    <?php } ?>
                    <td class="px-10 py-4">
                        <a href="#" data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline ">Edit</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

<?php }
