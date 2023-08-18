<?php

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

use App\Http\Controllers\DomainController;

Route::get('/', [DomainController::class, 'index'])->name('index');

Route::get('/whoAre', [DomainController::class, 'whoAre'])->name('whoAre');

Route::get('/login', [DomainController::class, 'generalLogin'])->name('generalLogin');

Route::get('/dominio', [DomainController::class, 'domain'])->name('domain');
