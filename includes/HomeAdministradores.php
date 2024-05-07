<script src="https://cdn.tailwindcss.com"></script>}
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<?php
include("../includes/BotonesAdmin.php");
//Obtenos el Json de la informacion de los botones
$jsonButtons = file_get_contents('../data/Botones.json');
//Hacemos la conversion a un array
$Buttons = json_decode($jsonButtons, true);
?>

<nav class="fixed top-0 left-0 w-20 h-full border-r bg-white space-y-8">
    <div class="flex flex-col h-full">
        <div class="h-20 flex items-center justify-center px-8">
            <a href="" class="flex-none">
                <img src="https://floatui.com/logo-letter.png" width="35" class="mx-auto" />
            </a>
        </div>
        <div class="flex-1 flex flex-col h-full">
            <ul class="px-4 text-sm font-medium flex-1">
                <?php
                for ($i = 0; $i < count($Buttons); $i++) {
                    Botones($Buttons[$i]['href'], $Buttons[$i]['name'], $Buttons[$i]['icon']);
                }
                ?>
            </ul>
            <div>
                <div class="relative py-4 px-4 border-t" @click.outside="isProfileActive = false">
                    <button @click="isProfileActive = !isProfileActive" class="w-12 h-12 flex items-center gap-x-4 cursor-pointer rounded-full ring-offset-2 ring-gray-800 focus:ring-2 duration-150">
                        <img src="https://randomuser.me/api/portraits/women/79.jpg" class="w-12 h-12 rounded-full" />
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
</div>