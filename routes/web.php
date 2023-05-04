<?php

use App\Http\Controllers\PostController;
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
//ici on a nommé notre route en tant que welcome
Route::get('/', [PostController::class, 'index']) -> name('welcome');

// route::get('posts', function() {
//     return response() -> json([
//         'title' => 'mon super titre',
//         'description' => 'ma super description'
//     ]);
// });

// route::get('articles', function() {
//     return view('articles');
// });
Route::get('posts/create', [PostController::class, 'create']) -> name('post.create');
Route::post('posts/create', [PostController::class, 'store']) -> name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show']) -> name('post.show');
Route::get('/contact', [PostController::class, 'contact']) -> name('contact');

