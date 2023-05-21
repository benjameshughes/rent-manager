<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Rent Manager') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex">
                <div class="p-6 text-gray-900 dark:text-gray-100 justify-start">
                    {{ __("Welcome, ") . Auth::user()->name . " :)" }}
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100 justify-end">
                    {{ __('Today\'s ') . date('F jS Y') }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
