<?php

use App\Http\Livewire\Articles;
use App\Http\Livewire\ArticleForm;
use Illuminate\Support\Facades\Route;

Route::get('/', Articles::class)->name('articles.index');
Route::get('/blog/crear', ArticleForm::class)->name('articles.create');
