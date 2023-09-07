<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('tareas');
});

Route::get('/nuevatarea', function () {
    return view('nuevatarea');
    });

Route::post(
        '/tareas',
        [TareaController::class, 'create']
        )->name('tarea.create');

Route::get('/tareas', function () {
        return view('tareas');
        })->name('tareas');

        
Route::middleware(['auth'])->group(function () {
            Route::get('/tareas/crear', 'TareaController@create')->name('tareas.create'); // Muestra el formulario
            Route::post('/tareas', 'TareaController@store')->name('tareas.store'); // Almacena la tarea
        });
        
        // Otras rutas públicas
        


Route::get('/privado', function () {
    return view('privado');
})->middleware(['auth', 'verified'])->name('privado');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
