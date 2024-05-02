<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body class="h-screen m-0 p-0 bg-slate-100">

    <div class="navbar text-orange-600">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>HOME</a></li>
                    <li><a>PLATOS</a></li>
                    <li><a>PROMOCIONES</a></li>
                    <li><a>CONTACTENOS</a></li>
                </ul>
            </div>
            <img src="/img/logo.png" alt="">
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1 text-xl">
                <li><a>HOME</a></li>
                <li><a>PLATOS</a></li>
                <li><a>PROMOCIONES</a></li>
                <li><a>CONTACTENOS</a></li>
            </ul>
        </div>
        <div class="navbar-end relative z-10 text-xl">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost text-xl">
                    <h2>LOGIN</h2>
                </div>
                <ul class="menu menu-sm dropdown-content p-2 shadow bg-base-100 rounded-box w-52 absolute top-0 right-0 mt-12">
                    <li><a class="text-xl">INGRESAR</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="bg-slate-100 flex justify-center items-center">
        <div class="relative w-full h-full grid grid-cols-1 md:grid-cols-3 md:h-full">
            <div class="col-span-2 relative">
                <img src="/img/index-fondo.webp" class="absolute inset-0 w-full h-52 rounded-lg md:w-full md:h-full object-cover md:p-2 md:rounded-[50px]" />
            </div>
            <div class="flex flex-col justify-center items-center mt-16 md:mt-0">
                <h1 class="text-center text-5xl mt-44 md:mt-24">RESTAURANTE</h1>
                <img src="/img/logo.png" alt="" width="300px" class="my-5">
                <h2 class="text-center text-3xl mb-24">"Donde cada plato cuenta su propia historia"</h2>
            </div>
        </div>
    </div>
    
    <div class="grid grid-cols-1 m-5 relative  text-orange-600">
        <div class="text-center absolute top-0 left-0 w-full z-10 pt-9">
            <a href="#" class="text-4xl">PLATOS</a>
        </div>
        <div class="text-center  opacity-30">
            <a href="#" class="text-6xl">PLATOS</a>
        </div>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 justify-center items-center text-center m-5">
        <div class="flex justify-center">
            <div class="card w-full bg-base-100 shadow-xl md:w-96">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Shoes!
                        <div class="badge badge-secondary">NEW</div>
                    </h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="card w-full bg-base-100 shadow-xl md:w-96">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Shoes!
                        <div class="badge badge-secondary">NEW</div>
                    </h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="card w-full bg-base-100 shadow-xl md:w-96">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Shoes!
                        <div class="badge badge-secondary">NEW</div>
                    </h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <footer class="rounded-lg shadow bg-slate-100">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
        </div>
    </footer>

    <script src="../public/js/TablesFilter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>