<?php
use App\Http\Controllers\Frontend\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});

//Bài 4:
Route::prefix('task')->group(function(){
    Route::get('/',[TaskController::class,'index'])->name('task.index');
    Route::post('/',[TaskController::class,'store'])->name('task.store');
    Route::get('/create',[TaskController::class,'create'])->name('task.create');
    Route::get('/{id}',[TaskController::class,'show'])->name('task.show');
    Route::get('/{id}',[TaskController::class,'update'])->name('task.update');
    Route::delete('/{id}',[TaskController::class,'destroy'])->name('task.destroy');
    Route::get('/{id}/edit',[TaskController::class,'edit'])->name('task.edit');
    Route::get('/{id}/complete',[TaskController::class,'complete'])->name('task.complete');
    Route::get('/{id}/reComplete',[TaskController::class,'reComplete'])->name('task.reComplete');
});
//Bài 5:
Route::prefix('task05')->group(function (){
    Route::get('/',[\App\Http\Controllers\Frontend05\TaskController::class,'index'])->name('task.index');
    Route::post('/store',[\App\Http\Controllers\Frontend05\TaskController::class,'store'])->name('task.store');
    Route::delete('/delete/{id}',[\App\Http\Controllers\Frontend05\TaskController::class,'destroy'])->name('task.delete');
    Route::get('/create',[\App\Http\Controllers\Frontend05\TaskController::class,'create'])->name('task.create');
    Route::get('show/{task}', [\App\Http\Controllers\Frontend05\TaskController::class,'show'])->name('task.show');
    Route::get('{task}/edit', [\App\Http\Controllers\Frontend05\TaskController::class,'edit'])->name('task.edit');
    Route::match(['put','patch'], 'task/{task}', [\App\Http\Controllers\Frontend05\TaskController::class,'update'])->name('task.update');
    Route::get('/complete/{id}',[\App\Http\Controllers\Frontend05\TaskController::class,'complete'])->name('task.complete');
    Route::get('/recomplete/{id}',[\App\Http\Controllers\Frontend05\TaskController::class,'reComplete'])->name('task.reComplete');
});
