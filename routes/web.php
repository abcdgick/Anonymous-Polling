<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PollController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('poll')->middleware('auth')->group(function(){
    Route::view('create', 'polls.create')->name('poll.create');
    Route::post('create', [PollController::class, 'store'])->name('poll.store');
    Route::get('/', [PollController::class,'index'])->name('poll.index');
    Route::get('/search',[PollController::class,'search'])->name('poll.search');

    Route::get('/{poll}', [PollController::class,'show'])->name('poll.show');
    
    Route::post('/{poll}/vote', [PollController::class,'vote'])->name('poll.vote');
    Route::get('delete/{poll}',[PollController::class,'delete'])->name('poll.delete');

})->middleware(['auth', 'verified'])->name('poll');;

require __DIR__.'/auth.php';
