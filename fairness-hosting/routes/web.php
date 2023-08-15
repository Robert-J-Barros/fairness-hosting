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

Route::view('/', [DomainController::class, 'index']);

Route::view('/whoAre', [DomainController::class, 'whoAre']);

Route::view('/login', 'generalLogin')->name('login');
#Route::view('/dominio','dominio')->name('dominio');


#paramentro de url por id
#Route::get('/dominio/{id?}', function ($id =null){
#    return view('dominio', ['id' => $id]);
#});
Route::get('/dominio', [DomainController::class, 'domain']);
