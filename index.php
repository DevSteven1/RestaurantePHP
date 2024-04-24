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

    <header class="h-20 bg-black w-full"></header>

    <section class="swiper mySwiper h-full w-full">
        <div class="swiper-wrapper">
            <?php
            include './includes/Card.php';

            $elementos = array(
                '{"titulo": "Elemento 1", "precio": "100.000"}',
                '{"titulo": "Elemento 1", "precio": "100.000"}',
                '{"titulo": "Elemento 1", "precio": "100.000"}',
                '{"titulo": "Elemento 1", "precio": "100.000"}',
                '{"titulo": "Elemento 1", "precio": "100.000"}',
                '{"titulo": "Elemento 1", "precio": "100.000"}',
                '{"titulo": "Elemento 1", "precio": "100.000"}',
                '{"titulo": "Elemento 1", "precio": "100.000"}',
            );

            $grupos = array_chunk($elementos, 6);

            foreach ($grupos as $grupo) {
                echo '<div class="swiper-slide grid grid-cols-3 grid-rows-2 p-10 gap-10">';
                foreach ($grupo as $elemento) {
                    $objeto = json_decode($elemento);
                    Card($objeto->titulo, $objeto->precio);
                }
                echo '</div>';
            }
            ?>
        </div>
        <div class="swiper-pagination"></div>
    </section>

    <footer class="h-20 bg-black w-full"></footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
            },
        });

        var bullets = document.querySelectorAll('.swiper-pagination-bullet');
        bullets.forEach(function(bullet) {
            bullet.classList.remove('bg-blue-500');
            bullet.classList.add('bg-black');
        });
    </script>
</body>

</html>