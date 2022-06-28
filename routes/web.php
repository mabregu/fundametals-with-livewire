<?php

use App\Http\Livewire\Articles;
use Illuminate\Support\Facades\Route;

Route::get('/', Articles::class)->name('articles');
