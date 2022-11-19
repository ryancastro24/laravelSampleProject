<?php

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Ramsey\Uuid\Builder\FallbackBuilder;

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


Route::prefix('/blog')->group(function(){
    
Route::get("/", [PostController::class, 'index'])->name('blog.index');
Route::get("/{id}", [PostController::class, 'show'])->name('blog.show')->whereNumber('id');
Route::get("/create", [PostController::class, 'create'])->name('blog.create');
Route::post("/", [PostController::class, 'store'])->name('blog.store');
Route::get("/edit/{id}", [PostController::class, 'edit'])->name('blog.edit');
Route::patch("/{id}", [PostController::class, 'update'])->name('blog.update');
Route::delete("/{id}", [PostController::class, 'destroy'])->name('blog.destroy');

});



//Route::view('/blog','blog.index',["ryan" => "programmer"]);

//Route::match(['get', 'post'], 'blog' , [PostController::class, 'index']);
//Route::any( 'blog' , [PostController::class, 'index']);

Route::get("/",HomeController::class);

Route::fallback(FallbackController::class);