<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('categorie/{id}',[HomeController::class,'detailcategorie'])->name('categorie');

Route::get('produit/{id}',[HomeController::class,'detailproduit'])->name('produit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

require __DIR__.'/auth.php';

/*Route::resource('produits', ProduitController::class);
Route::resource('categories', CategorieController::class);*/


Route::middleware(['admin','auth'])->prefix('administrateur')->group(function(){
    Route::resource('produits', ProduitController::class);

    Route::resource('categories', CategorieController::class);

});
