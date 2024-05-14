<?php
function Botones($href, $name, $svg)
{
?>
    <li>
        <a id="buttonActual" href="<?php echo $href ?>" class="boton relative flex items-center justify-center gap-x-2 text-gray-600 p-2 rounded-lg hover:bg-blue-100 active:bg-gray-100 duration-150 group">
            <?php echo $svg ?>
            <span class="absolute left-14 p-1 px-1.5 rounded-md whitespace-nowrap text-xs text-white bg-gray-800 hidden group-hover:inline-block group-focus:hidden duration-150"><?php echo $name ?></span>
        </a>
    </li>

<?php
}




