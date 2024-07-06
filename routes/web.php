<?php

use App\Livewire\ShowContactPage;
use App\Livewire\ShowEunusAliPage;
use App\Livewire\ShowHome;
use App\Livewire\ShowLabLifePage;
use App\Livewire\ShowPeoplePage;
use App\Livewire\ShowPublicationPage;
use App\Livewire\ShowNewsPage;
use App\Livewire\ShowValuePage;
use App\Livewire\ShowResearchPage;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ShowHome::class)->name('home');
Route::get('/research', ShowResearchPage::class)->name('researchPage');
Route::get('/publication', ShowPublicationPage::class)->name('publicationPage');
Route::get('/people', ShowPeoplePage::class)->name('peoplePage');
Route::get('/our-values', ShowValuePage::class)->name('values');
Route::get('/eunus-ali', ShowEunusAliPage::class)->name('eunusAli');
Route::get('/gallery', ShowLabLifePage::class)->name('labLife');
Route::get('/news', ShowNewsPage::class)->name('aboutUs');
Route::get('/contact-us', ShowContactPage::class)->name('contact');
