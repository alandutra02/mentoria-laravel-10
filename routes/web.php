<?php


use App\Http\Controllers\ProdutosController;
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


Route::get('/', function() {
    return view('index');
});


Route::get('/laravel', function () {
    return view('welcome');
});


# http://localhost:8989/Produtos/adicionar
Route::prefix('produtos')->group(function () {
    Route::get('/', [ProdutosController::class, 'index'])->name('produto.index');
   // Route::get('adicionar', [PodutosController::class, 'adicionar'])->name('produto.adicionar');
});