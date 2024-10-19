<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Users</title>

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased">
       <x-header> Cabeçalho </x-header> 
       <livewire:users-table />
    </body>
</html>
