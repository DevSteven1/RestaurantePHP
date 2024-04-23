<?php
function Card($titulo, $contenido) {
    echo '<div class="flex justify-center items-center h-full w-full bg-green-500">';
    echo '<h2>' . $titulo . '</h2>';
    echo '<p>' . $contenido . '</p>';
    echo '</div>';
}
?>
