<?php

use App\Livewire\ShowHome;
use App\Livewire\ShowResearchPage;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ShowHome::class)->name('home');
Route::get('/research', ShowResearchPage::class)->name('researchPage');
Route::get('/publication', ShowResearchPage::class)->name('publicationPage');
