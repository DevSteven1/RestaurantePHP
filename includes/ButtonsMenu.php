<?php
function ButtonsMenu($href, $name, $svg)
{
?>
    <li>
        <a href="<?php echo $href; ?>" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <?php echo $svg; ?>
            <span class="flex-1 ms-3 whitespace-nowrap"><?php echo $name; ?></span>
        </a>
    </li>
<?php
}
?>