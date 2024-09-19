<form class="w-full max-w-3xl p-10 shadow-2xl m-auto bg-white">
    <div class="flex items-center justify-between py-6">
        <h1 class="text-xl text-black font-black">
            Registro
        </h1>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombre">
                Nombre *
            </label>
            <input class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white placeholder:text-violet-600" id="nombre" type="text" placeholder="Nombre">
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="correo">
                Correo Electronico *
            </label>
            <input class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 placeholder:text-violet-600" id="correo" type="email" placeholder="example@mail.com">
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="apellido_paterno">
                Apellido Paterno *
            </label>
            <input class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white placeholder:text-violet-600" id="apellido_paterno" type="text" placeholder="Apellido Paterno">
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="contraseña">
                Contraseña *
            </label>
            <input class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white placeholder:text-violet-600" id="contraseña" type="password" placeholder="Contraseña">
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="apellido_materno">
                Apellido Materno *
            </label>
            <input class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white placeholder:text-violet-600" id="apellido_materno" type="text" placeholder="Apellido Materno">
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="confirmar_contraseña">
                Confirmar contraseña *
            </label>
            <input class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white placeholder:text-violet-600" id="confirmar_contraseña" type="password" placeholder="Contraseña">
        </div>
    </div>
    <div class="flex justify-center items-center p-4">
        <button data-modal-hide="default-modal" type="button" class="text-black bg-cyan-400 hover:bg-cyan-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center">Registrarse</button>
    </div>
</form>