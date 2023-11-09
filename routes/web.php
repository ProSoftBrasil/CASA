<?php

use App\Models\CidadeP;
use App\Models\VpessoaUsuario;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadePController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VpessoaUsuarioController;
use App\Http\Controllers\ProdutoFornecedorController;

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


Route::get('/', [ProdutoFornecedorController::class, 'index']);
Route::get('/dashboard', function () {
   
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [VpessoaUsuarioController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/cidadep', [CidadePController::class, 'index'])->name('getCadastroPassagens');
    Route::get('/cidadep/create', [DadosVeiculoController::class, 'create'])->name('cidadep.create');
    Route::post('/cidadep', [DadosVeiculoController::class, 'store'])->name('cidadep.store');

Route::get('/cidadep/{id}', [DadosVeiculoController::class, 'show'])->name('cidadep.show');

Route::get('/cidadep/{id}/edit', [DadosVeiculoController::class, 'edit'])->name('cidadep.edit');
Route::put('/cidadep/{id}', [DadosVeiculoController::class, 'update'])->name('cidadep.update');
Route::delete('/cidadep/{id}', [DadosVeiculoController::class, 'destroy'])->name('cidadep.destroy');
   


});

require __DIR__.'/auth.php';
