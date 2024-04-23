<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex flex-col m-0 p-0">

    <header class="h-20 bg-green-300 w-full"></header>

    <section class="swiper mySwiper h-full w-full">
        <div class="swiper-wrapper">
            <?php
            include './includes/Card.php';
            
            $elementos = array(
                '{"titulo": "Elemento 1", "contenido": "Lorem ipsum dolor sit amet, consectetur adipiscing elit."}',
                '{"titulo": "Elemento 2", "contenido": "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas."}',
                '{"titulo": "Elemento 3", "contenido": "Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."}',
                '{"titulo": "Elemento 4", "contenido": "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."}',
                '{"titulo": "Elemento 5", "contenido": "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."}',
                '{"titulo": "Elemento 6", "contenido": "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."}',
                '{"titulo": "Elemento 7", "contenido": "Lorem ipsum dolor sit amet, consectetur adipiscing elit."}',
                '{"titulo": "Elemento 8", "contenido": "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas."}'
            );

            $grupos = array_chunk($elementos, 6);

            foreach ($grupos as $grupo) {
                echo '<div class="swiper-slide grid grid-cols-3 grid-rows-2">';
                foreach ($grupo as $elemento) {
                    $objeto = json_decode($elemento);
                    Card($objeto->titulo, $objeto->contenido);
                }
                echo '</div>';
            }
            ?>
        </div>
        <div class="swiper-pagination"></div>
    </section>

    <footer class="h-20 bg-green-300 w-full"></footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
</body>

</html>
