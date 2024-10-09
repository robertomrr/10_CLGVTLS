<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/** 
 * ! Abaixo segue implementações sobre a instalação padrão.
 * */ 


Route::get('/Ex_Lw', function () {
    return view('Ex_LivewireView');
});


// Rotas NÃO nomeadas _________________________________________________________________________________________
// Link de acesso <a href="{{ url('Users') }}">Ir para a página Users CRUD</a>
// Uso: O método url() é utilizado para gerar uma URL com base no caminho direto da URL. 
// Ele é útil quando você deseja especificar o caminho exato para uma rota sem se preocupar com o nome da rota. 

Route::get('/Users', function () {
    return view('UsersView');
});

// Rotas nomeadas _____________________________________________________________________________________________
//Rota nomeada permite invocar utilizando o comando  <a href="{{ route('Users') }}">Ir para a página Users CRUD</a>
Route::get('/RotaNomeada', function () {
    return view('UsersView');
})->name('RotaNomeada');

// Rotas nomeadas _____________________________________________________________________________________________
// Componentes
Route::get('/app', function () {
    return view('/_root/appView');
})->name('PreparandoHeader');