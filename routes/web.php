<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicPagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PublicPagesController::class, 'home'])->name('home');

Route::get('/condominios-en-venta', [PublicPagesController::class, 'inventory'])->name('inventory');

Route::get('/condominio-en-venta/{id}', [PublicPagesController::class, 'unit'])->name('unit');
