<?php

use App\Livewire\Categoria\CategoriaCreate;
use App\Livewire\Categoria\CategoriaEdit;
use App\Livewire\Categoria\CategoriaIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias/create', CategoriaCreate::class)->name('categoria.create');
Route::get('/categorias/edit/{id}',CategoriaEdit::class)->name('categoria.edit');
Route::get('/categorias', CategoriaIndex::class)->name('categoria.index');
