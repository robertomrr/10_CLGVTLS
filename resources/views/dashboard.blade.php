<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
                <hr>
                <br>
                <div class="grid grid-cols-3">
                    <div><a href="{{   url('Ex_Lw') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Rota NÃO Nomeada Ex_Lw</a></div>
                    <div><a href="{{ route('RotaNomeada') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Rota Nomeada Users CRUD</a></div>                    
                    <div><a href="{{   url('Users') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Rota NÃO Nomeada Users CRUD</a></div>
                </div>                
            </div>
        </div>
    </div>
</x-app-layout>
