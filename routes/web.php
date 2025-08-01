<?php

use App\Livewire\AboutPage;
use App\Livewire\CareerPage;
use App\Livewire\ContactPage;
use App\Livewire\HomePage;
use App\Livewire\ProjectPage;
use App\Livewire\ServicesPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');
Route::get('/services', ServicesPage::class)->name('services');
Route::get('/projects', ProjectPage::class)->name('projects');
# TO do need to change the name of the class
Route::get('/team', CareerPage::class)->name('team');
Route::get('/about', AboutPage::class)->name('about');
Route::get('/contact', ContactPage::class)->name('contact');
