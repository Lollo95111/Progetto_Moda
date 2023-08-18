<?php

use App\Http\Controllers\newControll;
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

Route::get('/', [newControll::class,'welcome'])->name('Home');

Route::get('shop',[newControll::class,'shopping'] )->name('Shop');

Route::get('/scheda/{id}',[newControll::class,'schedaArt'])->name('Scheda');

Route::get('/categorie/{categoria}',[newControll::class,'categPerNomi'])->name('Categorie');

Route::get('/generi/{genere}',[newControll::class,'categPerGenere'] )->name('Generi');




Route::get('/catPergen/{gender}/{category}', [newControll::class, 'categoryXgen'])->name('catXgen');


