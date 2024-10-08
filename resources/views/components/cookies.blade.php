<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="fixed font-jetbrains inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
    <div class="relative px-10 py-8 w-full max-w-md bg-white shadow">
        <!-- Modal content -->
        <div class="relative">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 py-6 border-b">
                <h1 class="text-3xl text-black font-black mx-auto">
                    Uso de cookies
                </h1>
            </div>
            <!-- Modal body -->
            <div class="p-4 space-y-4 bg-gray-300">
                <p class="text-base leading-relaxed text-black">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
                <p class="text-base leading-relaxed text-black">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex justify-center items-center p-4 border-t">
                <button data-modal-hide="default-modal" type="button" class="text-black bg-cyan-400 hover:bg-cyan-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center">Acepto</button>
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