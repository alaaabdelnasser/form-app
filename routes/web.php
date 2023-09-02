<?php

use App\Http\Controllers\FormController;
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

Route::view('/form', 'formBuilder');

Route::get('/form/{form}', [FormController::class,'getfrom'])->name('show-form');
Route::get('/form-list', [FormController::class,'formlist']);
Route::get('/answer-list/{form}', [FormController::class,'answerlist'])->name('show-answers');
Route::post('/form-store', [FormController::class,'store'])->name('data-store');
Route::post('/answers-store/{form}', [FormController::class,'storeAnswer'])->name('answers-store');


//Route::get('/form',[FormController::class,'createForm']);
//Route::get('/form',[FormController::class,'storeForm']);
