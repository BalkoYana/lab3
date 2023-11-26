<?php

use App\Http\Controllers\FactoryController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('factories', FactoryController::class);
/*
Route::get('/index', [FactoryController::class, 'index'])->name('factory.index');
Route::get('/create', [FactoryController::class, 'create'])->name('factory.create');
Route::get('/edit', [FactoryController::class, 'edit'])->name('factory.edit');
Route::get('/show', [FactoryController::class, 'show'])->name('factory.show');
Route::delete('/factories/{factory}', [FactoryController::class, 'destroy'])->name('factories.destroy');

Route::post('/factories', [FactoryController::class, 'store'])->name('factories.store');
Route::put('/update/id', [FactoryController::class, 'update'])->name('factories.update');

*/
