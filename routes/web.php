<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "Ahmad Raihan",
        "email" => "ahmadraihan@gmail.com",
        "image" => "tes.jpg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

// halaman single post
Route::get('posts/{slug}', [PostController::class, 'show']);
