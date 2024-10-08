<!-- Modal toggle -->
<!-- <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Toggle modal
</button> -->

<!-- Main modal DELETE HIDDEN IN THIS CLASS-->
<div id="default-modal" tabindex="-1" aria-hidden="true" class=" overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-lg max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header deltated border-b -->
            <div class="flex items-center justify-center p-4 md:p-5 rounded-t">
                <h2 class="text-xl text-black font-semibold">
                    Uso de cookies
                </h2>
                </button>
            </div>
            <!-- Modal body -->
            <div class="mx-12 p-4 md:p-5 space-y-4 bg-gray-300">
                <p class="text-base leading-relaxed text-black">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
                <p class="text-base leading-relaxed text-black">
                    The European Unios General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                </p>
            </div>
            <!-- Modal footer i added the justify center  and deleted border-t -->
            <div class="flex justify-center items-center p-4 md:p-5 border-gray-200 rounded-b">
                <button data-modal-hide="default-modal" type="button" class="text-black bg-cyan-400 hover:bg-cyan-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center">Aceptar</button>
            </div>
        </div>
    </div>
</div><!-- First modal: Acuerdos de Uso -->
<div id="usage-modal" tabindex="-1" aria-hidden="true"
    class="fixed inset-0 z-50 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="relative px-10 py-8 w-full max-w-96 bg-white shadow">
        <!-- Modal content -->
        <div class="relative">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 py-6 border-b">
                <h1 class="text-xl text-black font-black mx-auto">
                    Acuerdos de Uso
                </h1>
            </div>
            <!-- Modal body -->
            <div class="p-4 space-y-4 bg-gray-300">
                <p class="text-base leading-relaxed text-black">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its
                    citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
                <p class="text-base leading-relaxed text-black">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its
                    citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex justify-center items-center p-4 border-t">
                <button data-modal-hide="usage-modal" type="button"
                    class="text-black bg-[#95D8EB] hover:bg-[#5EB2E5] focus:ring-4 focus:outline-none focus:ring-[#5EB2E5] font-medium text-sm px-5 py-2.5 text-center">Acepto</button>
            </div>
        </div>
    </div>
</div>

<!-- Second modal: Uso de cookies -->
<div id="default-modal" tabindex="-1" aria-hidden="true"
    class="fixed inset-0 z-50 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="relative px-10 py-8 w-full max-w-96 bg-white shadow">
        <!-- Modal content -->
        <div class="relative">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 py-6 border-b">
                <h1 class="text-xl text-black font-black mx-auto">
                    Uso de cookies
                </h1>
            </div>
            <!-- Modal body -->
            <div class="p-4 space-y-4 bg-gray-300">
                <p class="text-base leading-relaxed text-black">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its
                    citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
                <p class="text-base leading-relaxed text-black">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its
                    citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex justify-center items-center p-4 border-t">
                <button data-modal-hide="default-modal" type="button"
                    class="text-black bg-[#95D8EB] hover:bg-[#5EB2E5] focus:ring-4 focus:outline-none focus:ring-[#5EB2E5] font-medium text-sm px-5 py-2.5 text-center">Acepto</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const closeModalButtons = document.querySelectorAll('[data-modal-hide]');

        // Show the "Acuerdos de Uso" modal by default
        const usageModal = document.getElementById('usage-modal');
        usageModal.classList.remove('hidden');

        closeModalButtons.forEach(button => {
            button.addEventListener('click', () => {
                const modalId = button.getAttribute('data-modal-hide');
                const modal = document.getElementById(modalId);
                if (modal) {
                    modal.classList.add('hidden');

                    // If the closed modal is the "Acuerdos de Uso", show "Uso de Cookies" modal
                    if (modalId === 'usage-modal') {
                        const cookiesModal = document.getElementById('default-modal');
                        cookiesModal.classList.remove('hidden');
                    }
                }
            });
        });
    });
</script>
