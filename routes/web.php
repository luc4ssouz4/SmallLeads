<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\LeadsInteractionsController;

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


// Rotas com autenticação
Route::middleware('auth')->group(function () {
   
    // Rota Inicial
    Route::get('/', [LeadsController::class, 'index'])->name('leadsList');

    // Rotas leads
    Route::get('/leads/new', [LeadsController::class, 'create'])->name("leadsNew");
    Route::post('/leads/new', [LeadsController::class, 'store']);

    Route::get('/leads/edit/{id}', [LeadsController::class, 'edit'])->name("leadsEdit");
    Route::put('/leads/edit/{id}', [LeadsController::class, 'update']);

    Route::get('/leads/delete/{id}', [LeadsController::class, 'destroy'])->name("leadsDelete");

    // Leads Convertidos
    Route::get('/clients', [LeadsController::class, 'clients'])->name("leadsClients");

    // Interações
    Route::get('/interactions', [LeadsInteractionsController::class, 'index'])->name("leadsInteractions");

    Route::get('/interactions/new', [LeadsInteractionsController::class, 'create'])->name("leadsInteractionsNew");
    Route::post('/interactions/new', [LeadsInteractionsController::class, 'store']);

    Route::get('/interactions/delete/{id}', [LeadsInteractionsController::class, 'destroy'])->name("leadsInteractionsDelete"); 
    
    // Rota logout auth
    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

});

// Rotas sem autenticação
Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
    
});

//require __DIR__.'/auth.php';
