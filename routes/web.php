<?php

use App\Livewire\Auth\Login;
use App\Livewire\Cliente;
use App\Livewire\Cliente\ClienteCreate;
use App\Livewire\Cliente\ClienteDashboard;
use App\Livewire\Cliente\Create;
use App\Models\Cliente as ModelsCliente;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro/clientes' , ClienteCreate::class);

Route::get('/', Login::class)->name('login');

Route::get('/cliente/dashboard', ClienteDashboard::class)->middleware(['auth', 'role:cliente'])->name('cliente.dashboard');