<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\PublicController;

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

// Routes to PublicController
Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

//Routes to ComicController
Route::get('/comics/addComic', [ComicController::class, 'addComic'])->name('addComic');
Route::get('/comics/allComics', [ComicController::class, 'allComics'])->name('allComics');
Route::get('/comics/comicDetails/{comic}', [ComicController::class, 'comicDetails'])->name('comicDetails');
Route::post('/comics/send', [ComicController::class, 'sendComic'])->name('sendComic');
Route::get('/comics/edit/{comic}', [ComicController::class, 'editComic'])->name('editComic');
Route::delete('/comics/delete/{comic}', [ComicController::class, 'deleteComic'])->name('deleteComic');
