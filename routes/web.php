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
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(array('prefix' => '/'), function () {

    Route::get('/dashboard', function () {
        return view('dashboard', ['blog' => Post::all()]);
    })->middleware(['auth'])->name('dashboard');

    Route::get('/dashboard/add', function () {
        return view('add');
    })->middleware(['auth'])->name('dashboard/add');

    Route::get('/dashboard/{post}', function (Post $post) {
        return view('post', ['post' => $post]);
    })->middleware(['auth'])->name('dashboard/{post}');

});

Route::post('/dashboard/add', [PostController::class,'store'])->middleware(['auth'])->name('dashboard/add');

require __DIR__ . '/auth.php';
