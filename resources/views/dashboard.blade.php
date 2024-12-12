<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight bg-gradient-to-r from-blue-500 to-purple-600 text-white py-3 px-6 rounded-md shadow-lg">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg border border-gray-200 dark:border-gray-700">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                    <h3 class="text-xl font-bold mb-4">{{ __("Selamat Datang di Sistem Informasi Perpus Alvalfa") }}</h3>
                    <p class="text-lg">{{ __("Halo, ".Auth()->user()->name."!") }}</p>
                    <p class="text-sm mt-2 text-gray-500 dark:text-gray-400">Semoga harimu menyenangkan!</p>
                    <div class="mt-6 text-blue-500 hover:text-blue-600">
                        {{ __('Jelajahi Sistem') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
