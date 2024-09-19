<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&display=swap" rel="stylesheet">
</head>

<nav
    class="theme-header bg-skin-fill font-kode-mono w-full z-10 sticky start-0 top-0 border-b-8 border-[#794adb] text-skin-base">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="http://localhost/servicios-ip/public/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="logo.svg" class="h-10" alt="Logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap">IdScanner</span>
        </a>
        <div class="flex xl:order-2 space-x-3 xl:space-x-0 rtl:space-x-reverse">

            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-skin-base rounded-lg xl:hidden hover:bg-[#794adb] focus:outline-none aria-controls="navbar-sticky"
                aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full xl:flex xl:w-auto xl:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 xl:p-0 mt-4 font-medium  xl:space-x-8 rtl:space-x-reverse xl:flex-row xl:mt-0 xl:border-0">
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-skin-base rounded hover:bg-[#794adb] xl:hover:bg-transparent xl:hover:underline xl:p-0">Inicio</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-skin-base rounded hover:bg-[#794adb] xl:hover:bg-transparent xl:hover:underline xl:p-0">Guía</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-skin-base rounded hover:bg-[#794adb] xl:hover:bg-transparent xl:hover:underline xl:p-0">Acerca
                        de...</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-skin-base rounded hover:bg-[#794adb] xl:hover:bg-transparent xl:hover:underline xl:p-0">Gestor
                        de Usuarios</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-skin-base rounded hover:bg-[#794adb] xl:hover:bg-transparent xl:hover:underline xl:p-0 xl:pl-20">Nombre de Usuario</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-skin-base rounded hover:bg-[#794adb] xl:hover:bg-transparent xl:hover:underline xl:p-0">Salir</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
