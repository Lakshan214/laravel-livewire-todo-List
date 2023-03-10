<?php

use App\Http\Controllers\HomeController;
use App\Http\Livewire\Todo\Form\NewForm;
use App\Http\Livewire\Todo\Table\NewTable;
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

 Route::get('/',[HomeController::class,'view']);
 Route::get('Todo,Table', NewTable::class);


Route::prefix('/task')->group (function(){
    Route::post('/save',[HomeController::class,'save'])->name('task.save'); 
    Route::get('/{task_id}/delete',[NewTable::class,'delete'])->name('task.delete'); 
    // Route::get('/{task_id}/update',[HomeController::class,'update'])->name('task.update'); 

});