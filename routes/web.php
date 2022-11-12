<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Comment;

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

Route::get('/', function () {
    $posts = Post::all();
    $comments = Comment::all();
    return view('app', ['posts' => $posts, 'comments' => $comments]);
});

// Route::get('/', 'PostController@index');

Route::middleware('auth')->group(function () {
    Route::get('/posts/create', 'PostController@create');
    Route::post('/posts', 'PostController@store');
    Route::get('/posts/{post}', 'PostController@show');
    Route::put('/posts/{post}', 'PostController@update');
    Route::delete('/posts/{post}', 'PostController@destroy');


    Route::get('/posts/{post}/edit', 'PostController@edit');
    Route::get('/posts', 'PostController@index');

    Route::get('/myPosts', 'PostController@myPosts');
    Route::get('/myComments', 'PostController@myComments');

    Route::resource('/comments', 'CommentController')->only(['store', 'destroy']);
});

//CRUD


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
