<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;
use PhpParser\Node\Stmt\Return_;

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
    return view('index');
});

Route::prefix('produtos')->group(function (){
    Route::get('/', [ProdutosController::class, 'index'])->name('produtos.index');
    Route::delete('/delete', [ProdutosController::class, 'delete'])->name('produtos.delete');
    
});