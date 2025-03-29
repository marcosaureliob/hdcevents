<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {

    $nome = "Marcos";
    $idade = 30;
    $profissao = 'tecnologia';
    $arr = [10, 20, 30,40,50];
    $nomes = ['Pedro', 'Tiago', 'João', 'Marcos', 'Lucas', 'Mateus'];
    return view('welcome', ['nome' => $nome, 'idade' => $idade, 'area' => $profissao, 'arr' => $arr, 'nomes' => $nomes]);
});

Route::get('/produtos', function() {
    return view('products');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
