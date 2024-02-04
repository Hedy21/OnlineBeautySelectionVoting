<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\SelectionController;
use App\Http\Controllers\ComponentTestController;

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
    return view('login');
});

Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'registerPost'])->name('register');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'loginPost'])->name('login');

//for queen selections
Route::get('/leaderboard',[SelectionController::class,'leaderboard'])->name('leaderboard');
Route::get('/selectionForm',[SelectionController::class,'selectionForm'])->name('selectionForm');
Route::post('/selectionFormUpload',[SelectionController::class,'selectionFormUpload'])->name('selectionFormUpload');

//for king selections
Route::get('/leaderboard2',[SelectionController::class,'leaderboard2'])->name('leaderboard2');
Route::get('/selectionForm2',[SelectionController::class,'selectionForm2'])->name('selectionForm2');
Route::post('/selectionFormUpload2',[SelectionController::class,'selectionFormUpload2'])->name('selectionFormUpload2');

//selection preview
Route::get('/items/{id}',[SelectionController::class,'previewSelection'])->name('selection#show');

//vote count
Route::post('/voted', [SelectionController::class, 'votedHer'])->name('voted');


Route::post('vote',[SelectionController::class,'vote'])->name('vote');
Route::get('preview',[SelectionController::class,'preview'])->name('preview');
Route::post('selection/{id}',[SelectionController::class,'votedHer'])->name('voted');

// Route::get('login',[VoteController::class,'login']);
// Route::post('loginSave',[VoterController::class,'login'])->name('login#save');

// Route::get('register',[VoteController::class,'register']);
// Route::post('registerSave',[VoterController::class,'register'])->name('register#save');

// Route::get('leaderboard',[VoteController::class,'leaderboard'])->name('success#leaderboard');
// Route::get('kingForm',[VoteController::class,'kingForm']);
// Route::get('queenForm',[VoteController::class,'queenForm']);


Route::controller(ComponentTestController::class)->group(function(){
    Route::get('/imageUpload','imageUpload');
    Route::post('/imageUpload','storeImage');
    Route::get('/showImages','showImages')->name('showImages');
});


