<?php
function Tablas(array $columns, array $data, bool $mesas, string $tableName)
{
?>
    <table class="w-full text-sm text-left col-span-12 text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <?php foreach ($columns as $column) {
                    echo '<th scope="col" class="py-3 px-6">' . $column . '</th>';
                } ?>
                <?php if ($mesas) {
                    echo '<th scope="col" class="py-3 px-72">Meseros</th>';
                } ?>
                <th scope="col" class="py-3 px-6">Funciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $index => $row) {
                $json_data = htmlspecialchars(json_encode($row), ENT_QUOTES, 'UTF-8');
                $id = $row[$columns[0]]; // Obtener el ID de la primera columna
            ?>
                <tr class="bg-white border-b" data-id="<?= $id ?>" data-table="<?= $tableName ?>">
                    <?php foreach ($row as $cell) {
                        echo '<td class="py-4 px-6">' . $cell . '</td>';
                    } ?>
                    <?php if ($mesas) { ?>
                        <td class="flex items-center py-4">
                            <label for="countries-<?= $index ?>" class="block mb-2 px-7 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                            <select id="countries-<?= $index ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[35%] p-2.5">
                                <option selected>Choose a country</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>
                        </td>
                    <?php } ?>

                    <td class="px-5 py-4">
                    <form action="" method="post">

                    <span class="material-symbols-outlined cursor-pointer transition-transform hover:scale-125 hover:text-orange-400 edit-btn" data-json="<?= $json_data ?>" data-modal-target="crud-modal" data-modal-toggle="crud-modal">
                            edit
                        </span>

                        <button name="eliminar" class="material-symbols-outlined cursor-pointer transition-transform hover:scale-125 hover:text-red-400 delete-btn" data-id="<?= $id ?>" data-table="<?= $tableName ?>">
                            delete
                        </button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } ?>