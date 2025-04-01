<?php

use App\Livewire\Auth\Login;
use App\Livewire\Cliente;
use App\Livewire\Cliente\Create;
use App\Models\Cliente as ModelsCliente;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro/clientes' , Create::class);

Route::get('/', Login::class)->name('login');

Route::get('/admin', function(){
    return 'login admin';
})->middleware(['auth', 'role:admin'])->name('admin.dashboard'); // acessar a página do admin

Route::get('/user', function(){
    return 'login.user';
})->middleware(['auth', 'role:user'])->name('user.dashboard'); // acessar a página do user
