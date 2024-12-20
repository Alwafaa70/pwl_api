<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight bg-gradient-to-r from-blue-500 to-purple-600 text-white py-3 px-6 rounded-md shadow-lg">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="min-h-screen bg-cover bg-center" style="background-image: url('https://i.pinimg.com/736x/11/09/e8/1109e8e94bcb183d53387b06a619c7c2.jpg');" class="py-12 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg border border-gray-200 dark:border-gray-700">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                    <h3 class="text-xl font-bold mb-4">{{ __("HAYY!! Selamat Datang di Perpustakaan ALWAFAA") }}</h3>
                    <p class="text-lg">{{ __("Halo, ".Auth()->user()->name."!") }}</p>
                    <p class="text-sm mt-2 text-gray-500 dark:text-gray-400">Ayoo Pilih Buku Yang Menarik!</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
