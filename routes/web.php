<?php

use App\Livewire\ShowBlog;
use App\Livewire\ShowBlogDetail;
use App\Livewire\ShowContact;
use App\Livewire\ShowHome;
use App\Livewire\ShowPage;
use App\Livewire\ShowProject;
use App\Livewire\ShowService;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ShowHome::class)->name('home');
Route::get('/services', ShowService::class)->name('services');
Route::get('/contacts', ShowContact::class)->name('contacts');
Route::get('/projects', ShowProject::class)->name('projects');

Route::get('/blogs', ShowBlog::class)->name('blogs');
Route::get('/blogs/{slug}', ShowBlogDetail::class)->name('blogs-detail');

Route::get('/pages/{slug}', ShowPage::class)->name('pages');
