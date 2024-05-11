<script src="https://cdn.tailwindcss.com"></script>

<?php
function Tablas(array $columns, array $data)
{
?>
    <table class="w-full text-sm text-left col-span-12 text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <?php foreach ($columns as $column) { ?>
                    <th scope="col" class="py-3 px-6"><?php echo $column ?></th>
                <?php } ?>
                <th scope="col" class="py-3 px-6">Funciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row) { ?>
                <tr class="bg-white border-b">
                    <?php foreach ($row as $cell) { ?>
                        <td class="py-4 px-6">
                            <?php echo $cell; ?>
                        </td>
                    <?php } ?>
                    <td class="px-5 py-4">
                        <span class="material-symbols-outlined cursor-pointer transition-transform hover:scale-125 hover:text-orange-400" data-modal-target="crud-modal" data-modal-toggle="crud-modal">
                            edit
                        </span>
                        <span class="material-symbols-outlined cursor-pointer transition-transform hover:scale-125 hover:text-red-400">
                            delete
                        </span>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

<?php }
