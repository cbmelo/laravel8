<?php

use App\Http\Controllers\{
    PagesController,
    PostController
};
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/users/{name}/{id}', function($name, $id) {
//     return 'This is user ' .$name.' and id # '.$id;
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Public Pages;

Route::get('/', [PagesController::class, 'index'])->name('pages.index');
Route::get('/games', [PagesController::class, 'games'])->name('pages.games');
Route::get('/entertenimento', [PagesController::class, 'entertenimento'])->name('pages.entertenimento');



Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::any('posts/search', [PostController::class, 'search'])->name('posts.search');
