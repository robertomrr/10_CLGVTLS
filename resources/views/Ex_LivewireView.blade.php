<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Exemple Livewire</title>

    <!-- Outros estilos -->
    @livewireStyles
</head>
<body>
    {{-- Este é um comentário no Blade --}}
    <!-- Este é um comentário html -->
    @livewire('ExLivewireViewComponent')

    @livewireScripts
</body>
</html>
