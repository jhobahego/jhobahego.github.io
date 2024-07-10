<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 flex justify-center">
                <a href="{{ route('email') }}"
                    class="bg-white text-gray-800 dark:text-white dark:bg-black/50 px-3 py-2 rounded-md transition-transform hover:scale-105">Contactar
                    con
                    Mailing
                    Ando</a>
            </div>
        </div>
    </div>
</x-app-layout>
