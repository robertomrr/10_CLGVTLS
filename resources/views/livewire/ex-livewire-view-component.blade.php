<div>
    <div class="text-center">
        <h1 class="font-bold text-7xl"> Livewire </h1>
    </div>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Seq.</th>
                <th>Caminho</th>
                <th>Nome</th>
                <th>Linha de comando</th>
                <th>Obs</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1º) </td>
                <td>resources/views</td>
                <td>dashboard</td>
                <td> <a>href="{{   url('Ex_Lw') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"</a></td>
                <td>Rota não nomeada</td>
            </tr>
            <tr>
                <td>2º) </td>
                <td>routes</td>
                <td>web</td>
                <td><a>Route::get('/Ex_Lw', function () { return view('Ex_LivewireView'); }); </a></td>
                <td> Aciona diretamente a View <strong>Ex_LivewireView</strong>.blade.php</td>
            </tr>
            <tr>
                <td>3º) </td>
                <td>resources/views</td>
                <td><strong>Ex_LivewireView</strong>.blade.php</td>
                <td>@ livewire('ExLivewireViewComponent')</td>
                <td>Aciona o componente <strong>ExLivewireViewComponent</strong></td>
            </tr>
            <tr>
                <td>4º) </td>
                <td>app/Livewire</td>
                <td><strong>ExLivewireViewComponent</strong>.php</td>
                <td>render = > return view('livewire.ex-livewire-view-component')</td>
                <td>Aciona a view('livewire.<strong>ex-livewire-view-component</strong>')</td>
            </tr>
            <tr>
                <td>5º) </td>
                <td>resources/views/livewire/includes</td>
                <td><strong>ex-livewire-view-component</strong>.blade.php</td>
                <td></td>
                <td>Está view que esta sendo exibida</td>
            </tr>            
        </tbody>
    </table>
    <hr><hr><hr>
    <div class="text-center">
        <h1 class="font-bold text-7xl"> Component </h1>
    </div>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Seq.</th>
                <th>Caminho</th>
                <th>Nome</th>
                <th>Linha de comando</th>
                <th>Obs</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1º) </td>
                <td>resources/views</td>
                <td>dashboard</td>
                <td> <a> href="{{ route('PreparandoHeader') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"</a></td>
                <td>Rota nomeada</td>
            </tr>
            <tr>
                <td>2º) </td>
                <td>routes</td>
                <td>web</td>
                <td><a>Route::get('/app', function () { return view('/_root/appView'); })->name('PreparandoHeader'); </a></td>
                <td> Aciona diretamente a View appView.blade.php</td>
            </tr>
            <tr>
                <td>3º) </td>
                <td>resources/views/_root</td>
                <td>appView.blade.php</td>
                <td> x-header> Cabeçalho /x-header> </td>
                <td>Aciona o componente header</td>
            </tr>
            <tr>
                <td>4º) </td>
                <td>resources/views/components</td>
                <td>header.blade.php</td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
