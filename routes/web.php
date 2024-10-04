<?php

use App\Livewire\PortfolioDetails;
use App\Livewire\ShowAbout;
use App\Livewire\ShowContact;
use App\Livewire\ShowHome;
use App\Livewire\ShowPortfolio;
use App\Livewire\ShowResume;
use App\Livewire\ShowService;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/',ShowHome::class)->name('home');
Route::get('/about',ShowAbout::class)->name('about');
Route::get('/resume',ShowResume::class)->name('resume');
Route::get('/service',ShowService::class)->name('service');
Route::get('/portfolio',ShowPortfolio::class)->name('portfolio');
Route::get('/portfolio/{id}',PortfolioDetails::class)->name('portfolioDetails');
Route::get('/contact',ShowContact::class)->name('contact');
