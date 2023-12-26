<?php

use App\Livewire\CustomerEdit;
use App\Livewire\CustomerView;
use App\Livewire\CustomerIndex;
use App\Livewire\CustomerCreate;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('index', CustomerIndex::class);
Route::get('create', CustomerCreate::class);
Route::get('view/{customer}', CustomerView::class)->name('view');
Route::get('edit/{customer}', CustomerEdit::class)->name('edit');
