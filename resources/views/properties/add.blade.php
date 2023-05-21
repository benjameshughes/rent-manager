<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Property') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex">
                <div class="p-6 text-gray-900 dark:text-gray-100 justify-start">
                    <form action="/properties/add" method="POST">
                    @csrf
                    <label for="name">Property Name</label>
                    <input type="text" name="name" id="name">
                    <label for="address1">Address Line 1</label>
                    <input type="text" name="address1" id="address1">
                    <label for="address2">Address Line 2</label>
                    <input type="text" name="address2" id="address2">
                    <label for="address3">Address Line 3</label>
                    <input type="text" name="address3" id="address3">
                    <label for="town">Town</label>
                    <input type="text" name="town" id="town">
                    <label for="county">County</label>
                    <select name="county" id="county">
                        <option value="uk">United Kingdom</option>
                    </select>
                    <select name="country" id="country">
                        <option value="uk">United Kingdom</option>
                    </select>
                    <select name="agent" id="agent">
                        <option value="">select managing agent</option>
                        <option value="1">Alex Hughes</option>
                    </select>
                    <select name="landlord" id="landlord">
                        <option value="">Select the landlord</option>
                        <option value="1">Jamie Hughes</option>
                        <option value="2">Lyna Sharman</option>
                    </select>
                    <label for="rooms">Number of rooms</label>
                    <input type="number" name="rooms" id="rooms" min="1" max="10" placeholder="1">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Add Property</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
