<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <

<script>
    function toggleMenu() {
        const menu = document.getElementById('menu');
        menu.classList.toggle('hidden');
    }

    // Opcional: cerrar el menú si haces click fuera
    window.onclick = function(event) {
        if (!event.target.matches('#menu-button') && !event.target.closest('#menu')) {
            const menu = document.getElementById('menu');
            if (!menu.classList.contains('hidden')) {
                menu.classList.add('hidden');
            }
        }
    }
</script>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
