<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicPagesController;
use Spatie\Honeypot\ProtectAgainstSpam;

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

Route::redirect('/login', '/nova/login', 301);
Route::post('/enviar-mail', [PublicPagesController::class, 'sendMail'])->name('send.email')->middleware(ProtectAgainstSpam::class);


//Rutas con traducciones
Route::localized(function () {

    Route::get('/', [PublicPagesController::class, 'home'])->name('home');

    Route::get( Lang::uri('/condominios-en-venta'), [PublicPagesController::class, 'inventory'])->name('inventory');

    Route::get( Lang::uri('/condominio-en-venta').'/{id}', [PublicPagesController::class, 'unit'])->name('unit');

    Route::get( Lang::uri('/contacto'), [PublicPagesController::class, 'contact'])->name('contact');

    Route::get( Lang::uri('/avances-de-obra'), [PublicPagesController::class, 'construction'])->name('construction');

});