<div>
    <div class="container mx-auto bg-blue-500 text-center h-14 mt-4 pt-4 pb-4 ">
        {{ $slot }}
    </div>
    <div class="container mx-auto bg-orange-300 text-center h-14 mt-4 pt-4 pb-4">
        <div class="grid grid-cols-2 gap-4">
            <div><a href="{{ url('/dashboard') }}" <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Voltar </button></a></div>
            <div><a href="{{ url('/dashboard') }}" <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Próximo </button></a></div>
        </div>
    </div>    
</div>