<?php

use App\Http\Controllers\RouteController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
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

Route::get('/', [RouteController::class,'index']);
Route::get('/representante', [RouteController::class,'representante']); 
Route::get('/promociones', [RouteController::class,'promociones']); 
Route::get('/productos', [RouteController::class,'productos']); 
Route::get('/tiendas', [RouteController::class,'tiendas']); 
Route::get('/empresa', [RouteController::class,'empresa']); 
Route::get('/contacto', [RouteController::class,'contacto']); 
Route::fallback([RouteController::class,'notFound']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
