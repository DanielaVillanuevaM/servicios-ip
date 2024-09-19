<nav class="flex m-5" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="#" class="inline-flex items-center text-sm font-medium text-slate-900 hover:text-blue-600">Inicio</a>
        </li>
        <li>
            <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <a href="#" class="ms-1 text-sm font-medium text-slate-900 hover:text-blue-600 md:ms-2">Gestor de Usuarios</a>
            </div>
        </li>
        <li aria-current="page">
            <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="ms-1 text-sm font-medium text-slate-900 md:ms-2">Nombre de Usuario</span>
            </div>
        </li>
    </ol>
</nav>

<!-- user name or line divider -->
<div class="flex bg-cyan-400 bg-opacity-25">
    <h1 class="p-8 font-semibold">Nombre de Usuario</h1>
</div>

<!-- here starts the grid  -->


<div class="grid grid-cols-5 grid-rows-5 gap-4">
    <div>
        <button data-modal-hide="default-modal" type="button" class="text-black bg-cyan-400 hover:bg-cyan-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center">Dar Administrador</button>
    </div>
    <div class="col-start-1 row-start-2">
        <button data-modal-hide="default-modal" type="button" class="text-black bg-cyan-400 hover:bg-cyan-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center">Quitar Administrador</button>
    </div>
    <div class="col-start-1 row-start-3">
        <button data-modal-hide="default-modal" type="button" class="text-black bg-cyan-400 hover:bg-cyan-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center">Eliminar Cuenta</button>
    </div>
    <div class="col-span-4 row-span-5 col-start-2 row-start-1">
        <h1>Id Número</h1>
        <div>
            <h2>Nombre Completo</h2>
            <h2>Nombre Completo del Usuario</h2>
        </div>
        <div>
            <h2>Correo Electronico</h2>
            <h2>correo@ejemplo.com</h2>
        </div>
    </div>
</div>