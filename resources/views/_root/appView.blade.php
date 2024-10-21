<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
</head>
<body>
   <x-header> Cabeçalho </x-header> 
   <button id="btn-show-sweetalert"     class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Alerta 1 </button>
   <button id="btn-show-sweetalert5"    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Alerta 5 </button>
   <button id="btn-show-sweetalert6"    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded show-example-btn" 
                                        aria-label="Try me! Example: A dialog with three buttons">Alerta 6 </button>
</body>
</html>